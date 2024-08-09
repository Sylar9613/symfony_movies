<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CountryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $country1 = $country2 = $country3 = new Country();
        $country1->setName('USA');
        $country2->setName('España');
        $country3->setName('Cuba');

        $manager->persist($country1);
        $manager->persist($country2);
        $manager->persist($country3);

        $manager->flush();
    }
}
