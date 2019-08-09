<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use Doctrine\ORM\EntityManager;
use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="profil_index", methods={"GET"})
     */
    public function index(ProfilRepository $profilRepository): Response
    {
        return $this->render('profil/index.html.twig', [
            'profils' => $profilRepository->findAll(),
        ]);
    }

    /**
     * @Route("/profil", name="profil_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $entityManager)
    {
        $profil = new Profil();
        $form = $this->createForm(ProfilType::class, $profil);
        $values = $request->request->all();

        $form->handleRequest($request);
        $form->submit($values);

            if($form->isSubmitted() ){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($profil);
            $entityManager->flush();
            $data = [
                'status' => 201,
                'message' => 'profil créer avec succes'
            ];

            return new JsonResponse($data, 201); 
        }
               

    $data=[
            'status' => 500,
        'message' => 'profil non créer'
    ];

        return new JsonResponse($data, 500); 
    }

    /**
     * @Route("/{id}", name="profil_show", methods={"GET"})
     */
    public function show(Profil $profil): Response
    {
        return $this->render('profil/show.html.twig', [
            'profil' => $profil,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="profil_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Profil $profil): Response
    {
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profil_index');
        }

        return $this->render('profil/edit.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="profil_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Profil $profil): Response
    {
        if ($this->isCsrfTokenValid('delete'.$profil->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($profil);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profil_index');
    }
}
