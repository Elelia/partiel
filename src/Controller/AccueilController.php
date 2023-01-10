<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig',[
            'controller_name' => 'AccueilController',
        ]);
    }


    
    // back
    #[Route('/jeux', name: 'jeux')]
    public function jouer(): Response
    {
        return $this->render('jeux/jeux.html.twig',[
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/bouton', name: 'VersJeux')]
    public function bouton(): Response
    {
        return $this->render('jeux/bouton.html.twig',[
            'controller_name' => 'AccueilController',
        ]);
    }
}
