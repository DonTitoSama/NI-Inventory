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
        for ($i=0; $i < ; $i++) { 
            $ingredient = new Ingredient();
            $ingredient->setName("Ingrédient#1");
            $ingredient->setPrice(3.0);
    
            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}
