<?php

namespace App\Controller;

use App\Entity\DemandePressing;
use App\Entity\Pressing;
use App\Entity\User;
use App\Form\DemandePressingType;
use App\Repository\DemandePressingRepository;
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

class RegisterMembreController extends AbstractController
{
    #[Route('/register/membre', name: 'app_register_membre', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, MailerInterface $mailer, ResetPasswordHelperInterface $resetPasswordHelper): Response
    {
        $demandePressing = new DemandePressing();
        $form = $this->createForm(DemandePressingType::class, $demandePressing);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $pressing = $demandePressing->getPressing();
            $membre = $demandePressing->getMembre();
            $pressing->setMembre($membre);
            $pressing->setDemandePressing($demandePressing);

            $demandePressing->setNom($pressing->getNom());
            $demandePressing->setAdresse($pressing->getAdresse());
            $demandePressing->setEmail($pressing->getEmail());

            $user = new User();
            $user->setNom($membre->getNom());
            $user->setPrenom($membre->getPrenom());
            $user->setEmail($membre->getEmail());
            $user->setTelephone($membre->getTelephone());
            $user->setAdresse($membre->getAdresse());
            $user->setState(false);
            $hashedPassword = $passwordHasher->hashPassword($user, "1234");
            $user->setPassword($hashedPassword);
            $user->setPressing($pressing);
            $user->setMembre($membre);
            $entityManager->persist($user);
            $membre->setPressing($pressing);
            $membre->setUser($user);

            $entityManager->persist($membre);

//            if ($membre->getEmail()) {
//                $this->addFlash('error', 'Le pressing ou le membre existe déjà.');
//                return $this->redirectToRoute('app_register_membre');
//            }

            $entityManager->persist($pressing);

            $entityManager->persist($demandePressing);


            $entityManager->flush();

            // Generate a password reset token for the newly created user
            $resetToken = $resetPasswordHelper->generateResetToken($user);
            //Envoi mail
            $email = (new TemplatedEmail())
                ->from(new Address('contact@pressing.dymotechnologie.com', 'Contact'))
                ->to($user->getEmail())
                ->subject('Your password reset request')
                ->htmlTemplate('reset_password/email.html.twig')
                ->context([
                    'resetToken' => $resetToken,
                ]);
//            dd($mailer);
            $mailer->send($email);

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('register_membre/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
