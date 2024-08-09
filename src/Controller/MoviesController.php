<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies', methods: ['GET','HEAD'])]
    public function index(): Response
    {
        return $this->render('movies/index.html.twig');
    }
}
