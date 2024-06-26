<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    private $recipeRepository;
    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    #[Route('/Home', methods: ['GET'],  name: 'Home')]
    public function index(): Response
    {
        $recipe = $this->recipeRepository->findAll();
        //dd($recipe);
       

        return $this->render('Home.html.twig', [
            'recipe' => $recipe
        ]);
    }

    #[Route('/Home/{id}', methods: ['GET'], name: 'recipe')]
    public function show($id): Response
    {
        $recipe = $this->recipeRepository->find($id);
        ($recipe);
       

        return $this->render('show.html.twig', [
            'recipe' => $recipe
        ]);
    }
}
