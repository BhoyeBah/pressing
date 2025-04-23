<?php

namespace App\Controller;

use App\Entity\DemandePressing;
use App\Form\DemandePressingType;
use App\Repository\DemandePressingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/demande/pressing')]
class DemandePressingController extends AbstractController
{
    #[Route('/', name: 'app_demande_pressing_index', methods: ['GET'])]
    public function index(DemandePressingRepository $demandePressingRepository): Response
    {
        return $this->render('register_membre/index.html.twig', [
            'demande_pressings' => $demandePressingRepository->findAll(),
        ]);
    }

    #[Route('/register/membre', name: 'app_demande_pressing_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $demandePressing = new DemandePressing();
        $form = $this->createForm(DemandePressingType::class, $demandePressing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demandePressing);
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_pressing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_pressing/new.html.twig', [
            'demande_pressing' => $demandePressing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_pressing_show', methods: ['GET'])]
    public function show(DemandePressing $demandePressing): Response
    {
        return $this->render('demande_pressing/show.html.twig', [
            'demande_pressing' => $demandePressing,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demande_pressing_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandePressing $demandePressing, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DemandePressingType::class, $demandePressing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_pressing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_pressing/edit.html.twig', [
            'demande_pressing' => $demandePressing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_pressing_delete', methods: ['POST'])]
    public function delete(Request $request, DemandePressing $demandePressing, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandePressing->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($demandePressing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_pressing_index', [], Response::HTTP_SEE_OTHER);
    }
}
