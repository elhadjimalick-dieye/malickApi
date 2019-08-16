<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Profil;
use App\Entity\Partenaire;
use App\Form\UserFormType;
use PhpParser\Node\Stmt\Echo_;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException;

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



    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    /**
     * @Route("/login_check", name="login", methods={"POST"})
     * @param JWTEncoderInterface $JWTEncoder
     * @throws \Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException
     */
    public function login(Request $request, JWTEncoderInterface $JWTEncoder)
    {
        $values = json_decode($request->getContent());

        $repo = $this->getDoctrine()->getRepository(User::class);
        $user = $repo-> findOneBy(['username' => $values->username]);
       
        

        if (!$user) {
            $data = [
                'status2' => 400,
                'message2' => 'Username incorrect'
            ];
            return new JsonResponse($data);
        }

        $pass = $this->encoder->isPasswordValid($user, $values->password);
        if (!$pass) {
            $data = [
             'status2' => 400,
            'message2' => 'Mot de Pass incorrect'
        ];
            return new JsonResponse($data);
        }

        if ($user->getStatut()!=null && $user->getStatut()=="bloquer") {
            return $this->json([
                'message1' => 'cet Utilisateur est bloqué'
            ]);
        }


        if ($user->getStatut()!=null && $user->getPartenaire()!=null && $user->getPartenaire()->getStatut()=="bloquer") {
            return $this->json([
                'message1' => 'Le votre partenaire est bloqué'
            ]);
        }


        $token = $JWTEncoder->encode([
            'username' => $user->getUsername(),
            'exp' => time() + 86400 // 1 day expiration
        ]);
        return $this->json([
            'token' => $token
        ]);
    }
    /** 
    * @Route("/bloquer", name="updatparten", methods={"POST"})
   */
public function userBloquer(Request $request, UserRepository $userRepo,EntityManagerInterface $entityManager): Response
   {
       $values = json_decode($request->getContent());
       $user=$userRepo->findOneByUsername($values->username);
       echo $user->getStatut();
       if($user->getStatut()=="bloquer"){
           if($user->getProfil()=="admin"){
               $user->setRoles(["ADMIN_PARTENAIRE"]);
           }
           elseif($user->getProfil()=="user"){
               $user->setRoles(["USER_PARTENAIRE"]);
           }
           $user->setStatut("debloquer");
           }
           else{
            $user->setStatut("bloquer");
            $user->setRoles(["ROLE_USERLOCK"]);
        

       $entityManager->flush();
       $data = [
           'status' => 200,
           'message' => 'utilisateur a changé de statut (bloqué)'
       ];
       return new JsonResponse($data);
   
   }
}
/** 
* @Route("/debloquer", name="updat", methods={"POST"})
*/

   public function userdeBloquer(Request $request, UserRepository $userRepo,EntityManagerInterface $entityManager): Response
   {
       $values = json_decode($request->getContent());
       $user=$userRepo->findOneByUsername($values->username);
       $user->getStatut();
       $user->setStatut("debloquer");
       $user->setRoles(["ADMIN_PARTENAIRE"]);
       $entityManager->flush();
       $data = [
           'status' => 200,
           'message' => 'utilisateur a changé de statut (débloqué)'
       ];
       return new JsonResponse($data);
   }

}
