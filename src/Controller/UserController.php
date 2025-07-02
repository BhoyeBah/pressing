<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUserType;
use App\Form\RegistrationFormType;
use App\Repository\RolesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/users')]
    #[Route('/', name: 'app_users_index')]
    public function index(UserRepository $userRepository): Response
    {

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
       $user = new User();
        $form = $this->createForm(AdminUserType::class, $user);
        $form->handleRequest($request);
      
        if($form->isSubmitted() && $form->isValid()){
            $currentUser = $this->getUser();
            $pressing = $currentUser->getPressing();
            $user->setPressing($pressing);
            
                    // Encode le mot de passe de l'utilisateur
                    $user->setPassword(
                        $userPasswordHasher->hashPassword(
                            $user,
                            $form->get('plainPassword')->getData()
                        )
                    ); 
            $user->setState(false);
    
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('user/new.html.twig', [
            'user' => $user,
            'formUser' => $form->createView(),
        ]);
    }


    #[Route('/{id}', name: 'app_users_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(AdminUserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager->flush();
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'formUser' => $form->createView(),
        ]);
    }


    #[Route('/state/{id}', name: 'app_users_state', methods: ['POST'])]
    public function state(Request $request, User $user, EntityManagerInterface $entityManager, Security $security):Response
    {
      

       $user->setState(!$user->isState());
       $entityManager->flush();
        
          return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
