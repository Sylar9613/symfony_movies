<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Genre;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $genre1 = $genre2 = $genre3 = new Genre();
        $genre1->setName('Action');
        $genre2->setName('Terror');
        $genre3->setName('Drama');
        $manager->persist($genre1);
        $manager->persist($genre2);
        $manager->persist($genre3);

        $manager->flush();
    }
}
