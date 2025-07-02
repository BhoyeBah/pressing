<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\User;
use App\Form\EmployeType;
use App\Repository\EmployeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/employe')]
class EmployeController extends AbstractController
{
    #[Route('/', name: 'app_employe_index', methods: ['GET'])]
    public function index(EmployeRepository $employeRepository, EntityManagerInterface $entityManager): Response
    {
        $currentUser = $this->getUser();
        $pressing = $currentUser->getPressing();

        // Récupère les employés associés au pressing
        $employes = $employeRepository->findByPressing($pressing);

        return $this->render('employe/index.html.twig', [
            'employes' => $employes,
        ]);
    }

    #[Route('/new', name: 'app_employe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, EmployeRepository $employeRepository,MailerInterface $mailer, ResetPasswordHelperInterface $resetPasswordHelper): Response
    {


        $employe = new Employe();
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $employe->getEmail()]);
            if ($existingUser) {
                $this->addFlash('error', 'L\adresse email est déja utilisée.');
                return $this->redirectToRoute('app_employe_new');
            }
            $currentUser = $this->getUser();
            $membres = $currentUser->getMembre();
            $pressing = $membres->getPressing();

            $employe->setMembre($membres);
            $employe->setPressing($pressing);

            $user = new User();
            $user->setEmail($employe->getEmail());
            $user->SetNom($employe->getNom());
            $user->setPrenom($employe->getPrenom());
            $user->setTelephone($employe->getTelephone());
            $user->setAdresse($employe->getAdresse());
            $user->setState(true);
            $user->setPassword('1234');
            $user->setPressing($pressing);
            $user->setMembre($membres);
            $entityManager->persist($user);
            $employe->setUser($user);
//            dd($employe, $entityManager);
            $nextNumber = $employeRepository->getNextEmployeNumber($pressing);
            $employe->setNumero(str_pad($nextNumber, 4, '0', STR_PAD_LEFT));
            $entityManager->persist($employe);

            $entityManager->flush();

            // Generate a password reset token for the newly created user
            $resetToken = $resetPasswordHelper->generateResetToken($user);
            //Envoi mail
            $email = (new TemplatedEmail())
                ->from(new Address('contact@pressing.dymotechnologie.com', 'Contact'))
                ->to($employe->getEmail())
                ->subject('Your password reset request')
                ->htmlTemplate('reset_password/email.html.twig')
                ->context([
                    'resetToken' => $resetToken,
                ])
            ;

            $mailer->send($email);

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/new.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_employe_show', methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_employe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_employe_delete', methods: ['POST'])]
    public function delete(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $employe->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($employe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
    }
}
