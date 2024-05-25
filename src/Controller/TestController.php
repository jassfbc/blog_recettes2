<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your login page ',
            'path' => 'src/Controller/TestController.php',
        ]);
    }
}
