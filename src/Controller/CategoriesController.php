<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Category;
use App\Entity\Product;



class CategoriesController extends Controller
{
    /**
     * @Route(
     *     path="/categories/",
     *     name="categories"
     * )
     */
    public function indexAction()
    {
        $categories = $this->get('doctrine')
            ->getRepository(Category::class)
            ->findAll();

        return $this->render('categories.html.twig',array(
            'categories' => $categories
        ));
    }

}


