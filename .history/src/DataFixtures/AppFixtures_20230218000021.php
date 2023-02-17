<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
use Faker\Factory;

class AppFixtures extends Fixture
{   
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=0; $i < 50; $i++) { 
            $ingredient = new Ingredient();
            // utilisation de faker PhP pour importer des mots randoms pour nos ingrédients
            $ingredient->setName($this->faker->word());
            $ingredient->setPrice(mt_rand(0,100));
    
            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}
