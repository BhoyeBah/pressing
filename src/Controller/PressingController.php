<?php

namespace App\Controller;

use App\Entity\Pressing;
use App\Form\PressingType;
use App\Repository\PressingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/pressing')]
class PressingController extends AbstractController
{
    #[Route('/', name: 'app_pressing_index', methods: ['GET'])]
    public function index(PressingRepository $pressingRepository): Response
    {
        $currentUser = $this->getUser();
        $pressingActif = $currentUser->getPressing();

        $pressing = $pressingRepository->findBy(['id' => $pressingActif]);
        return $this->render('pressing/index.html.twig', [
            'pressings' => $pressing,
        ]);
    }

    #[Route('/new', name: 'app_pressing_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,PressingRepository $pressingRepository): Response
    {
        $pressing = new Pressing();
        $form = $this->createForm(PressingType::class, $pressing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $nextNumber = $pressingRepository->getNextPressingNumber(['id' => $pressing->getId()]);
            $pressing->setNumero(str_pad($nextNumber, 4, '0', STR_PAD_LEFT));
            // dd($pressing);
            $entityManager->persist($pressing);
            $entityManager->flush();

            return $this->redirectToRoute('app_pressing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pressing/new.html.twig', [
            'pressing' => $pressing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pressing_show', methods: ['GET'])]
    public function show(Pressing $pressing): Response
    {
        return $this->render('pressing/show.html.twig', [
            'pressing' => $pressing,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pressing_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pressing $pressing, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PressingType::class, $pressing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pressing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pressing/edit.html.twig', [
            'pressing' => $pressing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pressing_delete', methods: ['POST'])]
    public function delete(Request $request, Pressing $pressing, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $pressing->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($pressing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pressing_index', [], Response::HTTP_SEE_OTHER);
    }
}
