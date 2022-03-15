<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Product::class);
        $products = $repo->findAll();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products
        ]);
    }
    /**
     *  @Route("/product/{id}", name="product_show")
     */
    public function show($id, EntityManagerInterface $em)
    {
        $repo = $em->getRepository(Product::class);
        $product = $repo->find($id);

        return $this->render(
            'product/show.html.twig',
            [
                'product' => $product
            ]
        );
    }
}
