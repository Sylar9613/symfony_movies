<?php

namespace App\DataFixtures;

use App\Entity\Country;
use App\Entity\Genre;
use App\Entity\Movie;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /*
        $movie1 = $movie2 = new Movie();
        $movie1->setTitle("Tiburón");
        $movie1->setDescription("Cuenta la historia de un enorme tiburón que ataca a varias personas en un pequeño pueblo de la costa este de Estados Unidos.");
        $movie1->setRuntime(124);
        $movie1->setBudget(5000000);
        $movie1->setPoster("https://pics.filmaffinity.com/jaws-195807307-large.jpg");
        $movie1->setReleaseDate(new DateTime());
        //$movie1->setGenre($manager->getRepository(Genre::class)->findOneBy(array('id' => 2)));
        //$movie1->setCountry($manager->getRepository(Country::class)->findOneBy(array('id' => 1)));
        
        $movie2->setTitle("Lo que el viento se llevó");
        $movie2->setDescription("Es una película estadounidense épica, histórica y romántica de 1939. Está basada en la novela homónima de 1936 escrita por Margaret Mitchell. La trama se desarrolla en el sur de Estados Unidos durante la guerra de Secesión y la reconstrucción.");
        $movie2->setRuntime(238);
        $movie2->setBudget(2500000);
        $movie2->setPoster("https://pics.filmaffinity.com/gone_with_the_wind-432251527-large.jpg");
        $movie2->setReleaseDate(new DateTime());
        //$movie2->setGenre($manager->getRepository(Genre::class)->findOneBy(array('id' => 3)));
        //$movie2->setCountry($manager->getRepository(Country::class)->findOneBy(array('id' => 1)));

        $manager->persist($movie1);
        $manager->persist($movie2);
        */

        $manager->flush();
    }
}
