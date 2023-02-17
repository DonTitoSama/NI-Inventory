<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $ingredient = new Ingredient();
        $ingredient->setName("Ingrédientc#1");
        $ingredient->setPrice(3.0);
        $ingredient->setCreatedAt();


        $manager->flush();
    }
}
