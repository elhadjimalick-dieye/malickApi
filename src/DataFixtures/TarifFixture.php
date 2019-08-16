<?php
namespace App\DataFixtures;

use App\Entity\Tarif;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TarifFixture extends Fixture
{
    public function load(ObjectManager $manager){
        
        $borneinferieur=array(1,501,1001,1101,101,2001,3001,5001,6001,10001,12001,15001,17001,20001,25001,30001,35001,40001,50001,60001,70001,75001,100001,125001,150001,175001,200001,225001,250001,275001,300001,325001,3250001,375001,400001,425001,450001,475001,500001);
        $bornesuperieur=array(500,1000,1100,1500,2000,3000,5000,6000,10000,12000,15000,17000,20000,25000,30000,35000,40000,50000,60000,70000,75000,100000,125000,150000,175000,200000,225000,250000,275000,300000,325000,350000,375000,400000,425000,450000,475000,500000);
        $valeur=array(50,100,100,100,200,200,400,600,600,900,900,1000,1000,1500,1500,1500,1800,1800,2000,2700,2700,3000,3600,3800,3800,4000,4500,5000,5500,6000,6500,7000,7500,8000,8300,8500,8750,9000);
        
        
        for ($i=0;$i<count($borneinferieur);$i++){
            $tarif=new Tarif();
            $tarif->setBorneInferieur($borneinferieur[$i]);
            $tarif->setBorneSuperieur($bornesuperieur[$i]);
            $tarif->setValeur($valeur[$i]);
            $manager->persist($tarif);
        }
            $manager->flush();
        }
   }