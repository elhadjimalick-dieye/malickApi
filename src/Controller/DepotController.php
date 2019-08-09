<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Depot;
use App\Form\Depot1Type;
use App\Entity\CompteBancaire;
use Doctrine\ORM\EntityManager;
use App\Repository\DepotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class DepotController extends AbstractController
{
    /**
     * @Route("/", name="depot_index", methods={"GET"})
     */
    public function index(DepotRepository $depotRepository): Response
    {
        return $this->render('depot/index.html.twig', [
            'depots' => $depotRepository->findAll(),
        ]);
    }

    /**
     * @Route("/depot", name="depot_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $manager)
    {

        $values = json_decode($request->getContent());

        $depot = new Depot();
        $form = $this->createForm(Depot1Type::class, $depot);
        $form->handleRequest($request);
        $data=$request->request->all();
        $form->submit($data);

        if ($form->isSubmitted()  /* && $form->isValid() */ ) {
 
                 $depot->setDate(new \DateTime());

                $depotRepository=$this->getDoctrine()->getRepository(User::class);
                $caissier=$depotRepository->find($values->caissier);
                $depot->setCaissier($caissier);
                $depot->setMontant($values->montant);
    
                $comptebancaire=$this->getDoctrine()->getRepository(CompteBancaire::class);
                $numero=$comptebancaire->findOneBy(['numero'=>$values->numeroCompte]);
                $depot->setNumeroCompte($numero);
                $numero->setSolde($numero->getSolde() + $values->montant);
    
            $manager->persist($numero);
            $manager->persist($depot);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($depot);
            $manager->flush();


            $data = [
                'status' => 201,
                'message' => 'Depot executé'
            ];

            return new JsonResponse($data, 201);   
                }

     
                $data = [
                    'status' => 500,
                    'message' => 'Depot non execute'
                ];
    
                return new JsonResponse($data, 500);   
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
        $form = $this->createForm(Depot1Type::class, $depot);
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
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($depot);
            $manager->flush();
        }

        return $this->redirectToRoute('depot_index');
    }
}
