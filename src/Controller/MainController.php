<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/Home', name: 'Home')]
    public function index(RecipeRepository $recipeRepository): Response
    {

       

        return $this->render('Home.html.twig');
    }
}
