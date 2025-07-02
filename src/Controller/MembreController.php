<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Entity\Pressing;
use App\Entity\User;
use App\Form\MembreType;
use App\Repository\MembreRepository;
use App\Repository\PressingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/membre')]
class MembreController extends AbstractController
{
    #[Route('/', name: 'app_membre_index', methods: ['GET'])]
    public function index(MembreRepository $membreRepository,EntityManagerInterface $entityManager): Response
    {
        // Récupère l'utilisateur courant
        $currentUser = $this->getUser();
        $pressing = $currentUser->getPressing();

        // Récupère les membres associés au pressing
        $membres = $membreRepository->findByPressing($pressing);

        return $this->render('membre/index.html.twig', [
            'membres' => $membres,
        ]);
    }

    #[Route('/new', name: 'app_membre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MembreRepository $membreRepository,UserPasswordHasherInterface $passwordHasher,PressingRepository $pressingRepository,MailerInterface $mailer, ResetPasswordHelperInterface $resetPasswordHelper): Response
    {
        $membre = new Membre();

        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $membre->getEmail()]);
            if ($existingUser) {
                $this->addFlash('error', 'L\adresse email est déja utilisée.');
                return $this->redirectToRoute('app_employe_new');
            }
            $currentUser = $this->getUser();
            $membres = $currentUser->getMembre();
            $pressing = $membres->getPressing();

            $user = new User();
            $user->setEmail($membre->getEmail());
            $user->setNom($membre->getNom());
            $user->setPrenom($membre->getPrenom());
            $user->setTelephone($membre->getTelephone());
            $user->setAdresse($membre->getAdresse());
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setState(false);
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);
            $membres->setPressing($pressing);
            $nextNumber = $membreRepository->getNextMembreNumber($pressing);
            $membre->setNumero(str_pad($nextNumber, 4, '0', STR_PAD_LEFT));
            $entityManager->persist($user);
            $membre->setUser($user);
            dd($membre);
//       dd($membre,$user->setEmail($membre->getEmail()), $plainPassword, $hashedPassword, $entityManager, $membre);
            $entityManager->persist($membre);
            $entityManager->flush();

            // Generate a password reset token for the newly created user
            $resetToken = $resetPasswordHelper->generateResetToken($user);
            //Envoi mail
            $email = (new TemplatedEmail())
                ->from(new Address('contact@pressing.dymotechnologie.com', 'Contact'))
                ->to($membre->getEmail())
                ->subject('Your password reset request')
                ->htmlTemplate('reset_password/email.html.twig')
                ->context([
                    'resetToken' => $resetToken,
                ])
            ;
            $mailer->send($email);

            $this->addFlash('success', 'Membre enregistré avec succès.');
            return $this->redirectToRoute('app_membre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('membre/new.html.twig', [
            'membre' => $membre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_membre_show', methods: ['GET'])]
    public function show(Membre $membre): Response
    {
        return $this->render('membre/show.html.twig', [
            'membre' => $membre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_membre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Membre $membre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_membre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('membre/edit.html.twig', [
            'membre' => $membre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_membre_delete', methods: ['POST'])]
    public function delete(Request $request, Membre $membre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$membre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($membre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_membre_index', [], Response::HTTP_SEE_OTHER);
    }
}
