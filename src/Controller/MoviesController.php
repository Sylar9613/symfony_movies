<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    public function __construct(private readonly EntityManagerInterface $entityManager) {
        
    }

    #[Route('/movies', name: 'app_movies', methods: ['GET','HEAD'])]
    public function index(): Response
    {
        $movies = $this->entityManager->getRepository(Movie::class)->findAll();
        //dd($movies);
        return $this->render('movies/index.html.twig',[
            'movies' => $movies
        ]);
    }
}
