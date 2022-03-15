<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $product = new Product();
            $product
                ->setName("Produit numéro $i")
                ->setDescriptif("<p>Contenu du produit $i</p>")
                ->setPicture("https://picsum.photos/200")
                ->setPrice(23)
                ->setSlug("produit_$i");
            $manager->persist($product);
        }

        $manager->flush();
    }
}
