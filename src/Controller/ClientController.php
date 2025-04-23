<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/client')]
class ClientController extends AbstractController
{

    #[Route('/', name: 'app_client_index', methods: ['GET'])]
    public function index(ClientRepository $clientRepository, EntityManagerInterface $entityManager): Response
    {

        $currentUser = $this->getUser();
//        $membres = $currentUser->getMembre();
        $pressing = $currentUser->getPressing();

        $clients = $entityManager->getRepository(Client::class)->findBy(['pressing' => $pressing]);

        $ClientCount = $clientRepository->countClient($pressing);
        return $this->render('client/index.html.twig', [
            'clients' => $clients,
            'clientCount' => $ClientCount,
        ]);
    }

    #[Route('/new', name: 'app_client_new', methods: ['GET', 'POST'])]
    public function new(Request $request,ClientRepository $clientRepository ,EntityManagerInterface $entityManager): Response
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            try {

                $currentUser = $this->getUser();
                $membres = $currentUser->getMembre();
                $pressing = $membres->getPressing();

                $nextNumber = $clientRepository->getNextClientNumber($pressing);
                $client->setNumero(str_pad($nextNumber, 4, '0', STR_PAD_LEFT));

                $client->setPressing($pressing);


                $entityManager->persist($client);
                $entityManager->flush();

                $this->addFlash('success', 'Client ajouté avec succès.');

                return $this->redirectToRoute('app_client_index', [], Response::HTTP_SEE_OTHER);

            }catch (UniqueConstraintViolationException $e){

                $this->addFlash('error', 'Le numéro de téléphone du client est déjà utilisé !!!!❌');
            }
        }


        return $this->render('client/new.html.twig', [
            'client' => $client,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_client_show', methods: ['GET'])]
    public function show(Client $client): Response
    {
        return $this->render('client/show.html.twig', [
            'client' => $client,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        try {
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();
                $this->addFlash('success', 'Les informations du client ont été modifiées avec succés');
                return $this->redirectToRoute('app_client_index', [], Response::HTTP_SEE_OTHER);
            }

        }catch (UniqueConstraintViolationException $e){

            $this->addFlash('error', 'Le numéro de téléphone du client est déjà utilisé !!!!❌');
        }

        return $this->render('client/edit.html.twig', [
            'client' => $client,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_client_delete', methods: ['POST'])]
    public function delete(Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($client);
            $entityManager->flush();
            $this->addFlash('success', 'Client supprimé avec succés');
        }

        return $this->redirectToRoute('app_client_index', [], Response::HTTP_SEE_OTHER);
    }
}
