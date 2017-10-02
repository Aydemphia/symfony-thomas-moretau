<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Product;

class ProductsController extends Controller
{
    /**
     * @Route(
     *     path="/products/",
     *     name="productsList"
     * )
     */
    public function indexAction()
    {

        $products = $this->get('doctrine')
            ->getRepository(Product::class)
            ->findAll();


        return $this->render('products.html.twig', array(
            'products' => $products
        ));
    }
}


