<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Product;
use App\Form\ProductType;

class FormController extends Controller
{
    /**
     * @Route(
     *     path="/form/",
     *     name="form"
     * )
     */


    public function createAction(Request $request)
    {

        $form = $this->createForm(ProductType::class, new Product);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            $file = $task->getImage();

            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('kernel.root_dir') . '/../public/uploads',
                $fileName
            );
            $task->setImage($fileName);

            // saving to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('productsList');
        }


        return $this->render('form.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}


