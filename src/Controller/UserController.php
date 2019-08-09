<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Profil;
use App\Entity\Partenaire;
use App\Form\UserFormType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use PhpParser\Node\Stmt\Echo_;

/**
     * @Route("/api", name="register")
     */
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
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $user->setImageFile($file);
            //recuperation id partenaire
            // $repository = $this->getDoctrine()->getRepository(Partenaire::class);
            // $parte= $repository->findAll();
            // $user->setPartenaire($parte[0]);
            $user->setStatut("actif");

            $profil = new Profil();

            $repository = $this->getDoctrine()->getRepository(Profil::class);
            $pro= $repository->findAll($profil->getId());
           
            if($user->getProfil()==$pro[0]){
               $user->setRoles(["ADMIN_SYSTEME"]);
            }
            elseif($user->getProfil()==$pro[1]){
                $user->setRoles(["CAISSIER_ADMIN"]);
             }
             elseif($user->getProfil()==$pro[2]){
                $user->setRoles(["ADMIN_PARTENAIRE"]);
             }
             elseif($user->getProfil()==$pro[3]){
                $user->setRoles(["USER_PARTENAIRE"]);
             }
             elseif($user->getProfil()==$pro[4]){
                $user->setRoles(["CAISSIER_PARTENAIRE"]);
             }

             elseif($user->getProfil()==$pro[""]){
                echo "veillez remplire le champs profil";
             }


           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'L\'utilisateur a été créé'
            ];

            return new JsonResponse($data, 201);        
        }
        $data = [
            'status' => 500,
            'message' => 'utilisateur non ajoutee'
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
