<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\Partenaire;
use App\Form\UserFormType;
use App\Entity\CompteBancaire;
use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\ProfilType;
use App\Entity\Profil;

/**
 * @Route("/api")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaire_index", methods={"GET","POST"})
     */
    public function index(PartenaireRepository $partenaireRepository)
    {
        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/partenaire", name="partenaire_new", methods={"GET","POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)
    {
        $random=random_int(100000,999999);
        $values=$request->request->all();
############################################### PARTENAIRE ##########################################
            $partenaire = new Partenaire();
            $partenaire->setNinea($values["ninea"]);
            $partenaire->setRaisonSociale($values["raisonSociale"]);
            $partenaire->setStatut("actif");
            $partenaire->setNomComplet($values["nomComplet"]);
            
############################################# ADMIN PARTENAIRE ######################################

            $admin = new User();
            $form = $this->createForm(UserFormType::class, $admin);
            $form->handleRequest($request);

            $data=$request->request->all();
            $form->submit($data);  
            $file=$request->files->all()['imageName'];
            $admin->setImageFile($file);
            $admin->setPassword($passwordEncoder->encodePassword($admin, ("1234")));
            $admin->setRoles(['ADMIN_PARTENAIRE']);

            $admin->setStatut("actif");
            $admin->setPartenaire($partenaire);


############################################# COMPTE PARTENAIRE ######################################
            $compte = new CompteBancaire();
            $compte->setNumero($random);
            $compte->setSolde(0);
            $compte->setPartenaire($partenaire);
            $admin->setCompteBancaire($compte);

            $entityManager =$this ->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->persist($admin);
            $entityManager->persist($compte);
            $entityManager->flush();

        

            $data = [
                'status' => 201,
                'message' => 'L\'utilisateur a été créé'
            ];

            return new JsonResponse($data, 201);     


            $data = [
                'status' => 500,
                'message' => 'L\'utilisateur NON créé'
            ];

            return new JsonResponse($data, 500);     
    }
    /**
     * @Route("/{id}", name="partenaire_show", methods={"GET"})
     */
    public function show(Partenaire $partenaire): Response
    {
        return $this->render('partenaire/show.html.twig', [
            'partenaire' => $partenaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="partenaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Partenaire $partenaire): Response
    {
        $form = $this->createForm(Partenaire::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/edit.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="partenaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Partenaire $partenaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partenaire_index');
    }
}
