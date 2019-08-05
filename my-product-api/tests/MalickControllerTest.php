<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MalickControllerTest extends WebTestCase
{
   
public function testajout()
{
    $client = static::createClient([],[
                'PHP_AUTH_USER' => 'milk',
                'PHP_AUTH_PW' => '1234',
    
         ]);
    $crawler = $client->request('POST', '/depot/new',[],[],['CONTENT_TYPE'=>"application/json"],

    '{
        "montant":700000,
        "numeroCompte":"711769",
        "caissier":"28"
        
        }
        '
);
    $rep=$client->getResponse();    
    $this->assertSame(201,$client->getResponse()->getStatusCode());
}


// public function testadmin()
// {
//     $client = static::createClient([],[
//                 'PHP_AUTH_USER' => 'milk',
//                 'PHP_AUTH_PW' => '1234',
    
//          ]);
//     $crawler = $client->request('POST', '/partenaire/new',[],[],['CONTENT_TYPE'=>"application/json"],

//     '{
//         "nomComplet":"Diakite",
//         "ninea":451269,
//         "raisonSociale":"SA",
//         "statut":"actif"
        
//         }
//         '
// );
//     $rep=$client->getResponse();    
//     $this->assertSame(201,$client->getResponse()->getStatusCode());
// }
}
