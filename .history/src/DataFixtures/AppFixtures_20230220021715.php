<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use App\Entity\Recipe;
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
        // FIXTURES INGREDIENTS

        $ingredient = [];
        for ($i=0; $i < 50; $i++) { 
            $ingredient = new Ingredient();
            // utilisation de faker PhP pour importer des mots randoms pour nos ingrédients
            $ingredient->setName($this->faker->word());
            $ingredient->setPrice(mt_rand(0,100));
            
            $ingredient[] = $ingredient;
            $manager->persist($ingredient);
        }

        // FIXTURES RECETTES
        for ($i=0; $j <25 ; $i++) { 
            $recipe = new Recipe();
            $recipe->setName($this->faker->word())
                // Si le temps est égale à 1 on lui donne un temps entre 0 et 1440, sinon il est null
                ->setTime(mt_rand(0, 1) == 1 ? mt_rand(1, 1440) : null)
                ->setNbPeople(mt_rand(0, 1) == 1 ? mt_rand(1, 50) : null)
                ->setDifficulty(mt_rand(0, 1) == 1 ? mt_rand(1, 5) : null)
        }

        $manager->flush();
    }
}
