<?php

namespace App\Controller;


use App\Entity\Commande;
use App\Entity\CommandeDetail;
use App\Entity\Paiement;
use App\Form\CommandeType;
use App\Repository\ArticlesRepository;
use App\Repository\ClientRepository;
use App\Repository\CommandeDetailRepository;
use App\Repository\CommandeRepository;
use App\Repository\PaiementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Monolog\alert;
use function Symfony\Component\Cache\Traits\client;
use function Symfony\Component\Clock\get;
use function Symfony\Config\em;

#[Route('/commande')]
class CommandeController extends AbstractController
{
    private $commandeRepository;
    private $commandeDetailRepository;
    private $entityManager;

    public function __construct(CommandeRepository $commandeRepository, EntityManagerInterface $entityManager, CommandeDetailRepository $commandeDetailRepository)
    {
        $this->commandeRepository = $commandeRepository;
        $this->commandeDetailRepository = $commandeDetailRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_commande_index')]
    public function index(CommandeRepository $commandeRepository, EntityManagerInterface $entityManager): Response
    {
        $currentUser = $this->getUser();
        $membres = $currentUser->getMembre();
        $pressing = $membres->getPressing();

        $commandes = $entityManager->getRepository(Commande::class)->findBy(['pressing' => $pressing]);
        //        $commandes = $commandeRepository->findAllOrderedByCreatedAtDesc();
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ClientRepository $clientRepository, ArticlesRepository $articlesRepository, CommandeRepository $commandeRepository, CommandeDetailRepository $commandeDetailRepository): Response
    {
        $montantTotal = 0;
        $montantRemise = 0;

        $currentUser = $this->getUser();
        $membres = $currentUser->getMembre();
        $pressing = $membres->getPressing();
        // $pressing->setNumero($this->commandeRepository->getNextCommandeNumber($pressing));

        $articles = $articlesRepository->findByPressing($pressing);
        $clients = $clientRepository->findByPressing($pressing);


        $curentDate = new \DateTime(null, new \DateTimeZone('Africa/Abidjan'));

        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande, [
            'clients' => $clients
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if ($commande->getDateLivraison() < $curentDate) {
                return $this->redirectToRoute('app_commande_new');
                $this->addFlash('danger', 'La date de livraison ne peut pas être inférieure à la date du jour.');
            } else {
                // Récupération des données du formulaire
                $formData = $request->request->all(); // Récupère toutes les données du formulaire

                $articlesData = $formData['articles_id'] ?? [];
                $quantities = $formData['quantity'] ?? [];
                $prices = $formData['price'] ?? [];
                $remises = $formData['remise'] ?? [];
                $montantRecu = isset($formData['montantRecu']) ? (float)$formData['montantRecu'] : 0.0;


                // Assurez-vous que les variables sont des tableaux
                if (is_array($articlesData) && is_array($quantities) && is_array($prices)) {
                    foreach ($articlesData as $index => $articleId) {
                        $quantity = isset($quantities[$index]) ? (int)$quantities[$index] : 0;
                        $price = isset($prices[$index]) ? (float)$prices[$index] : 0.0;
                        $remise = isset($remises[$index]) ? (float)$remises[$index] : 0.0;

                        // Créez une nouvelle instance de CommandeDetail
                        $commandeDetail = new CommandeDetail();
                        $article = $articlesRepository->find($articleId);

                        if ($article) {
                            //                            if (empty($commandeDetail->getQuantity())){
                            //                                return $this->redirectToRoute('app_commande_new');
                            //                            }
                            $commandeDetail->setArticles($article);
                            $commandeDetail->setCommande($commande);
                            $commandeDetail->setQuantity($quantity);
                            $commandeDetail->setPrixUnitaire($price);
                            $commandeDetail->setPrixTotal($quantity * $price);
                            $commandeDetail->setRemise($remise);
                            $commandeDetail->setPressing($pressing);
                            $nextNumber = $commandeDetailRepository->getNextDetailCommandeNumber($pressing);
                            $commandeDetail->setNumero(str_pad($nextNumber, 4, '0', STR_PAD_LEFT));

                            // Persistez le détail de la commande
                            $this->entityManager->persist($commandeDetail);

                            $montantTotal += $commandeDetail->getPrixTotal();
                            $montantRemise += $commandeDetail->getRemise();

                            // Ajoutez le détail à la commande
                            $commande->addCommandeDetail($commandeDetail);
                        }
                    }
                    $commande->setPressing($pressing);
                    // Générer le numéro de commande
                    $commande->setNumero($this->commandeRepository->generateCommandeNumber($pressing));
                    $commande->setMontantTotal($montantTotal);
                    $commande->setDateCommande(new \DateTime());
                    $commande->setRemise($montantRemise);

                    //Enregistrer paiement
                    $paiement = new Paiement();
                    $paiement->setCommande($commande);
                    $paiement->setPressing($pressing);

                    //                    $paiement->setNumero($this->commandeRepository->getNextCommandeNumber($pressing));
                    $nextNumber = $commandeDetailRepository->getNextDetailCommandeNumber($pressing);
                    $paiement->setNumero(str_pad($nextNumber, 4, '0', STR_PAD_LEFT));
                    $paiement->setMontantRecu($montantRecu);
                    $paiement->setDatePaiement(new \DateTime());
                    $this->entityManager->persist($paiement);
                    // dd($paiement);
                    // Mettre à jour le montant total reçu dans la commande

                    // Calculer le reste à payer
                    $resteAPayer = $commande->getMontantTotal() - $commande->getRemise() - $paiement->getMontantRecu();
                    $commande->setResteAPayer($resteAPayer);
                    if ($resteAPayer <= 0) {
                        $commande->setStatus('payé');
                    } else {
                        $commande->setStatus('non payé');
                    }
                    $commande->setPressing($pressing);

                    // Persistez la commande
                    $this->entityManager->persist($commande);

                    $this->entityManager->flush();
                    //    dd($commande,$pressing,$paiement,$commandeDetail);

                    $this->addFlash('success', 'Commande créée avec succès.');
                    return $this->redirectToRoute('commande_print_Detail', ['commande' => $commande->getId()]);
                } else {
                    $this->addFlash('danger', 'Les données des articles ne sont pas au format attendu.');
                }
            }
        }

        return $this->render('commande/new.html.twig', [
            'form' => $form->createView(),
            'clients' => $clients,
            'commande' => $commande,
            'numeroCommande' => $commande->getNumero(),
            'articles' => $articles,
            'curentdate' => $curentDate,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/Pint_commande/{commande}', name: 'commande_print_Detail', methods: ['GET'])]
    public function printdetails(Commande $commande, CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/facture_print.html.twig', [
            'commande' => $commande,
        ]);
    }


    #[Route('/commande/payer', name: 'app_commande_payer', methods: ['POST'])]
    public function payerCommande(Request $request, CommandeRepository $commandeRepository, EntityManagerInterface $entityManager): Response
    {
        $commandeId = $request->request->get('commandeId');
        $montantRecu = $request->request->get('paymentAmount');
        $commande = $commandeRepository->find($commandeId);
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée');
        }
        $resteAPayer = $commande->getResteAPayer();
        // Vérifier que le montant reçu ne dépasse pas le montant restant à payer
        if ($montantRecu > $resteAPayer) {
            $this->addFlash('danger', 'Le montant saisi ne doit pas dépasser le montant à payer.');
            return $this->redirectToRoute('app_commande_index', ['id' => $commandeId]);
        }
        $commandeDetails = $commande->getCommandeDetails(); // ou getDetailsCommande()

        foreach ($commandeDetails as $detail) {
            $numero = $detail->getNumero();
            break;
        }

        $paiement = new Paiement();
        $paiement->setCommande($commande);
        $paiement->setMontantRecu($montantRecu);
        $paiement->setDatePaiement(new \DateTime());
        $paiement->setPressing($commande->getPressing());
        $paiement->setNumero($numero);
        $entityManager->persist($paiement);
        $entityManager->flush();
        $resteAPayer = $commande->getResteApayer() - $paiement->getMontantRecu();
        $commande->setResteAPayer($resteAPayer);

        if ($resteAPayer <= 0) {
            $commande->setStatus('payé');
        } else {
            $commande->setStatus('non payé');
        }

        $entityManager->persist($commande);
        $entityManager->flush();

        // Rediriger l'utilisateur vers la page de liste des commandes avec un message de succès

        return $this->redirectToRoute('app_commande_index', [
            'success' => 'Le paiement a été enregistré avec succès !'
        ]);
    }

    #[Route('/Facture/payé', name: 'commande_paye', methods: ['GET'])]
    public function facturePaye(CommandeRepository $commandeRepository): Response
    {
        $pressing = $this->getUser()->getPressing();
        $commandes = $commandeRepository->findBy([
            'status' => 'paye',
            'pressing' => $pressing
        ]);
        return $this->render('commande/facture_paye.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/Facture/impayé', name: 'commande_impaye', methods: ['GET'])]
    public function factureImPaye(CommandeRepository $commandeRepository)
    {
        $pressing = $this->getUser()->getPressing();
        $commandes = $commandeRepository->findBy([
            'status' => 'non paye',
            'pressing' => $pressing
        ]);
        return $this->render('commande/impaye.html.twig', [
            'commandes' => $commandes,
        ]);
    }
}
