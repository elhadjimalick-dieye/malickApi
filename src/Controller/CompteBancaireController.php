<?php

namespace App\Controller;

use App\Form\CompteType;
use App\Entity\CompteBancaire;
use App\Entity\Partenaire;
use App\Form\EntityType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompteBancaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class CompteBancaireController extends AbstractController
{
    /**
     * @Route("/", name="compte_bancaire_index", methods={"GET"})
     */
    public function index(CompteBancaireRepository $compteBancaireRepository): Response
    {
        return $this->render('compte_bancaire/index.html.twig', [
            'compte_bancaires' => $compteBancaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/comptebancaire", name="compte_bancaire_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $entityManager)
    {
        $compteBancaire = new CompteBancaire();
        $form = $this->createForm(CompteType::class, $compteBancaire);
        $values = $request->request->all();

        $form->handleRequest($request);
        $form->submit($values);
        $numero= random_int(100000,999999);
        if ($form->isSubmitted() /* && $form->isValid() */) {
        $compteBancaire->setNumero($numero);


        $compteBancaire->setSolde("0");


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($compteBancaire);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'compte bancaire créer avec succes'
            ];

            return new JsonResponse($data, 201); 
                }

                $data = [
                    'status' => 500,
                    'message' => 'compte bancaire non créer '
                ];
    
                return new JsonResponse($data, 500); 
    }

    /**
     * @Route("/{id}", name="compte_bancaire_show", methods={"GET"})
     */
    public function show(CompteBancaire $compteBancaire): Response
    {
        return $this->render('compte_bancaire/show.html.twig', [
            'compte_bancaire' => $compteBancaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="compte_bancaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CompteBancaire $compteBancaire): Response
    {
        $form = $this->createForm(CompteBancaireType::class, $compteBancaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('compte_bancaire_index');
        }

        return $this->render('compte_bancaire/edit.html.twig', [
            'compte_bancaire' => $compteBancaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="compte_bancaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CompteBancaire $compteBancaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compteBancaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($compteBancaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('compte_bancaire_index');
    }
}
