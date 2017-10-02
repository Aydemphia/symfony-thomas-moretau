<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Category;

class CategoryController extends Controller
{
    /**
     * @Route(
     *     path="/categories/{id}",
     *     name="category"
     * )
     */

    public function indexAction($id)
    {

        $category = $this->get('doctrine')
            ->getRepository(Category::class)
            ->find($id);


        return $this->render('category.html.twig', array(
            'category' => $category
        ));
    }
}


