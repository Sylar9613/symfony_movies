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

    #[Route('/movies/{id}', name: 'app_movie', methods: ['GET'])]
    public function show(int $id) : Response {
        //dd($id);
        $movie = $this->entityManager->getRepository(Movie::class)->find($id);
        if(!$movie){
            throw $this->createNotFoundException('Película no encontrada');
        }
        return $this->render('movies/show.html.twig',[
            'movie' => $movie
        ]);
    }
}
