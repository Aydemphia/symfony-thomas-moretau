<?php

namespace App\Controller;
use App\Entity\Comments;
use App\Form\CommentsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Product;

class SingleController extends Controller
{
    /**
     * @Route(
     *     path="/products/{id}",
     *     name="single"
     * )
     */
    public function indexAction($id, Request $request)
    {

        $product = $this->get('doctrine')
            ->getRepository(Product::class)
            ->find($id);

        $comment = $this->get('doctrine')
            ->getRepository(Comments::class)
            ->findByProductId($id);

        $form = $this->createForm(CommentsType::class, new Comments);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            $task->setProductId($id);
            // saving to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirect($request->getUri());
        }


        return $this->render('single.html.twig', array(
            'form' => $form->createView(),
            'product' => $product,
            'comments' => $comment,
        ));
    }
}


