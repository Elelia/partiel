<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PersonnageRepository;

class PersonnageController extends AbstractController
{
    #[Route('/personnage', name: 'app_personnage')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    #[Route('/gameStart', name: 'startGame')]
    public function gameStart(Request $request, EntityManagerInterface $manager)
    {
    }


      public function giveCard(Personnage $perso)
      {
        $salut = $perso->findAll() ;
        $tableauIdCarte = array(1,1,2,2,2,2,2,3);
        foreach ($listPerso as $perso) {
          $taille = sizeof($tableauIdCarte);
          $i = rand(0,$taille);
          $perso.setCarte() = $tableauIdCarte[$i];
          unset($tableauIdCarte[$i]);
        }
      }    
}
