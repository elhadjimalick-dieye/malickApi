<?php

namespace App\Controller;

use App\Entity\Envoi;
use App\Form\EnvoiType;
use App\Repository\EnvoiRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class EnvoiController extends AbstractController
{
    /**
     * @Route("/envoie", name="envoi_index", methods={"GET"})
     */
    public function index(EnvoiRepository $envoiRepository): Response
    {
        return $this->render('envoi/index.html.twig', [
            'envois' => $envoiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="envoi_new", methods={"GET","POST"})
     */
    public function new(Request $request)
    {
        $envoi = new Envoi();
        $form = $this->createForm(EnvoiType::class, $envoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($envoi);
            $entityManager->flush();


            $data = [
                'status' => 201,
                'message' => 'envoie effectuée'
            ];
    
            return new JsonResponse($data, 201);    
        }

        $data = [
            'status' => 500,
            'message' => 'envoie echouée '
        ];

        return new JsonResponse($data, 500);    
   
    }

    /**
     * @Route("/{id}", name="envoi_show", methods={"GET"})
     */
    public function show(Envoi $envoi): Response
    {
        return $this->render('envoi/show.html.twig', [
            'envoi' => $envoi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="envoi_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Envoi $envoi): Response
    {
        $form = $this->createForm(EnvoiType::class, $envoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('envoi_index');
        }

        return $this->render('envoi/edit.html.twig', [
            'envoi' => $envoi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="envoi_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Envoi $envoi): Response
    {
        if ($this->isCsrfTokenValid('delete'.$envoi->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($envoi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('envoi_index');
    }
}
