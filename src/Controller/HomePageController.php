<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\CommandeRepository;
use App\Repository\PaiementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(ClientRepository $clientRepository, CommandeRepository $commandeRepository, PaiementRepository $paiementRepository): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $membres = $user->getMembre();
        $pressing = $membres->getPressing();

        $totalPaye = $paiementRepository->getTotalPayeParPressing($pressing);
        $totalImPaye = $commandeRepository->ResteApayer($pressing);


        $client = $clientRepository->countClient($pressing);
        $facture = $commandeRepository->countOrder($pressing);
        $facturePaye = $commandeRepository->countFacturePaye($pressing);
        $factureNonPaye = $commandeRepository->countFactureNonPaye($pressing);


        return $this->render('home_page/index.html.twig', [
            'client' => $client,
            'facture' => $facture,
            'facturePaye' => $facturePaye,
            'factureNonPaye' => $factureNonPaye,
            'totalPaye' => $totalPaye,
            'totalImPaye' => $totalImPaye
        ]);
    }
   
   
    #[Route('/recherche', name: 'recherche_dashboard', methods: ['GET'])]
    public function recherche(Request $request, ClientRepository $clientRepository, CommandeRepository $commandeRepository): Response
    {
        $user = $this->getUser();
        $membres = $user->getMembre();
        $pressing = $membres->getPressing();

        $query = $request->query->get('query');
        $client = [];
        $facture = [];

        if ($query) {
            $client = $clientRepository->clientChearch($query,$pressing);
            $facture = $commandeRepository->orderSearch($query,$pressing);
        } 

        return $this->render('home_page/recherche.html.twig', [
            'facture' => $facture,
            'client' => $client,
            'query' => $query
        ]);
    }
}
