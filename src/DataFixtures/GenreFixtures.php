<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Genre;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $genre1 = new Genre();
        $genre1->setName('Action');
        $manager->persist($genre1);

        $manager->flush();
    }
}
