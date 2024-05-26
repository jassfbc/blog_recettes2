<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Vegetarian');
        $manager->persist($category);

        $category1 = new Category();
        $category1->setName('Gluten-Free');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Main Dish');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Desert');
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName('Breakfast');
        $manager->persist($category4);

        $category5 = new Category();
        $category5->setName('Vegan');
        $manager->persist($category5);

        $category6 = new Category();
        $category6->setName('Salad');
        $manager->persist($category6);

        $category7 = new Category();
        $category7->setName('Sweet');
        $manager->persist($category7);

        $this->addReference('cat',$category);
        $this->addReference('cat1',$category1);
        $this->addReference('cat2',$category2);
        $this->addReference('cat3',$category3);
        $this->addReference('cat4',$category4);
        $this->addReference('cat5',$category5);
        $this->addReference('cat6',$category6);
        $this->addReference('cat7',$category7);



        $manager->flush();
    }
}
