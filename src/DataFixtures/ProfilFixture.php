<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProfilFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $profil = new Profil();
         $profil->setLibelle('ADMIN_SYSTEME');
         $manager->persist($profil);
         $profil1 = new Profil();
         $profil1->setLibelle('CAISSIER_SYSTEME');
         $manager->persist($profil1);
         $profil2 = new Profil();
         $profil2->setLibelle('ADMIN_PARTENAIRE');
         $manager->persist($profil2);
         $profil3 = new Profil();
         $profil3->setLibelle('USER_PARTENAIRE');
         $manager->persist($profil3);
         $profil4 = new Profil();
         $profil4->setLibelle('CAISSIER_PARTENAIRE');
         $manager->persist($profil4);


        $manager->flush();
    }
}
