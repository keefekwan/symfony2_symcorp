<?php
// src/Sym/CorpBundle/DataFixtures/ORM/LoadCategories.php

namespace Sym\CorpBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sym\CorpBundle\Entity\Category;

class LoadCategories extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setTitle('About');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setTitle('Our History');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setTitle('Our Team');
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setTitle('Join Us!');
        $manager->persist($category4);

        $category5 = new Category();
        $category5->setTitle('SymCorp');
        $manager->persist($category5);

        $manager->flush();

        $this->addReference('category-1', $category1);
        $this->addReference('category-2', $category2);
        $this->addReference('category-3', $category3);
        $this->addReference('category-4', $category4);
        $this->addReference('category-5', $category5);
    }

    public function getOrder()
    {
        return 10;
    }
}