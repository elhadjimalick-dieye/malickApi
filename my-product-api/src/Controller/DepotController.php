<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Depot;
use App\Form\DepotType;
use App\Entity\CompteBancaire;
use App\Repository\DepotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/depot")
 */
class DepotController extends AbstractController
{
    /**
     * @Route("/", name="depot_index", methods={"GET"})
     */
    public function index(DepotRepository $depotRepository)
    {
        return $this->render('depot/index.html.twig', [
            'depots' => $depotRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="depot_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $entityManager)
    {

        $values = json_decode($request->getContent());

        $depot = new Depot();
        $depot->setDate(new \DateTime());

            $depotRepository=$this->getDoctrine()->getRepository(Admin::class);
            $caissier=$depotRepository->find($values->caissier);
            $depot->setCaissier($caissier);
            $depot->setMontant($values->montant);

            $comptebancaire=$this->getDoctrine()->getRepository(CompteBancaire::class);
            $numero=$comptebancaire->findOneBy(['numero'=>$values->numeroCompte]);
            $depot->setNumeroCompte($numero);

            $numero->setSolde($numero->getSolde() + $values->montant);

            $entityManager->persist($numero);
            $entityManager->persist($depot);

            $entityManager->flush();


            $data = [
                'status' => 201,
                'message' => 'depot executé'
            ];

            return new JsonResponse($data, 201);

        

        return $this->render('depot/new.html.twig', [
            'depot' => $depot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="depot_show", methods={"GET"})
     */
    public function show(Depot $depot): Response
    {
        return $this->render('depot/show.html.twig', [
            'depot' => $depot,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="depot_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Depot $depot): Response
    {
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('depot_index');
        }

        return $this->render('depot/edit.html.twig', [
            'depot' => $depot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="depot_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Depot $depot): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depot->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($depot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('depot_index');
    }
}
