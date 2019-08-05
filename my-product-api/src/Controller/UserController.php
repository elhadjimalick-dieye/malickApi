<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Partenaire;
use App\Form\UserFormType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder,EntityManagerInterface $entityManager)
    {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        $data=$request->request->all();
        $form->submit($data);  
        $file=$request->files->all()['imageName'];
        if ($form->isSubmitted() ) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setImageFile($file);
            //recuperation id partenaire
            $repository = $this->getDoctrine()->getRepository(Partenaire::class);
            $parte= $repository->findAll();
            $user->setPartenaire($parte[0]);
            $user->setStatut("actif");
            $profil= $data["profil"];
            $user->setProfil($profil);
            $roles=[];
            if($profil=="admin"){
                $roles=["ROLE_ADMIN"];
            }
            elseif ($profil=="user") {
                $roles=["ROLE_USER"];
            }
            elseif ($profil=="partenaire" || $profil=="adminPartenaire") {
                $roles=["ROLE_ADMINPARTENAIRE"];
            }
            $user->setRoles($roles);

           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email


            $data = [
                'status' => 201,
                'message' => 'L\'utilisateur a été créé'
            ];

            return new JsonResponse($data, 201);        
        }
        $data = [
            'status' => 500,
            'message' => 'Renseigner tout les champs'
        ];

        return new JsonResponse($data, 500);     
    }

    /**
     * @Route("/login_check", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = $this->getUser();
        return $this->json([
            'username' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    }
}
