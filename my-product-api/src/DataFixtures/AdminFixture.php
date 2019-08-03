<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use phpDocumentor\Reflection\Types\This;

class AdminFixture extends Fixture
{

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
############################################# ADMIN SYSTEME #########################################

        $admin = new Admin("admin");
        $admin->setUsername('milk');
        $password = $this->encoder->encodePassword ($admin, '1234');
        $admin->setPassword($password);
        $admin->setPrenom('Malick');
        $admin->setNom('Dieye');
        $admin->setRoles(['ROLE_ADMIN_SYSTEME']);
        $admin->setAdresse('Mbour');
        $admin->setEmail('ndieyene@gmail.com');
        $admin->setTelephone('771327599');

        $manager->persist($admin);
        
############################################# CAISSIERE SYSTEME ######################################
        
        $admin1 = new Admin("caissiere");
        $admin1->setUsername('adji');
        $password1 = $this->encoder->encodePassword ($admin1, '1234');
        $admin1->setPassword($password1);
        $admin1->setPrenom('adji');
        $admin1->setNom('Dabo');
        $admin1->setRoles(['ROLE_CAISSIER_SYSTEME']);
        $admin1->setAdresse('dakar');
        $admin1->setEmail('dabo@gmail.com');
        $admin1->setTelephone('770000000');

        $manager->persist($admin1);

        $manager->flush();
    }
}
