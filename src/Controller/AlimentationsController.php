<?php

namespace App\Controller;

use App\Entity\Alimentations;
use App\Form\AlimentationsType;
use App\Repository\AlimentationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/alimentations")
 */
class AlimentationsController extends AbstractController
{
    /**
     * @Route("/", name="alimentations_index", methods={"GET"})
     */
    public function index(AlimentationsRepository $alimentationsRepository): Response
    {
        return $this->render('alimentations/index.html.twig', [
            'alimentations' => $alimentationsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="alimentations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $alimentation = new Alimentations();
        $form = $this->createForm(AlimentationsType::class, $alimentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($alimentation);
            $entityManager->flush();

            return $this->redirectToRoute('alimentations_index');
        }

        return $this->render('alimentations/new.html.twig', [
            'alimentation' => $alimentation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alimentations_show", methods={"GET"})
     */
    public function show(Alimentations $alimentation): Response
    {
        return $this->render('alimentations/show.html.twig', [
            'alimentation' => $alimentation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="alimentations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Alimentations $alimentation): Response
    {
        $form = $this->createForm(AlimentationsType::class, $alimentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alimentations_index', [
                'id' => $alimentation->getId(),
            ]);
        }

        return $this->render('alimentations/edit.html.twig', [
            'alimentation' => $alimentation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alimentations_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Alimentations $alimentation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alimentation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($alimentation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('alimentations_index');
    }
}
