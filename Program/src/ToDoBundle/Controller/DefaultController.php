<?php

namespace ToDoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ToDoBundle\Entity\items;
use ToDoBundle\Form;

class DefaultController extends Controller
{
    /**
     * @Route("/main")
     */
    public function indexAction()
    {

        $Items = new Items();
        $form = $this->createForm(new Form\ItemsType(), $Items);
        $request =  $this->get('request');
        $form->handleRequest($request);
        if($request->getMethod() == 'POST')
        {
            if($form->isValid())
            {
                $name = $form->get('name')->getData();
                $due_date = $form->get('due_date')->getData();
                $location = $form->get('location')->getData();
                $created = $form->get('created')->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($Items);
                $em->flush();

                $id=0;


                    $repository = $this->getDoctrine()
                        ->getRepository('ToDoBundle:items');
                $itemss = $repository->findAll();

                return $this->render('ToDoBundle:Default:main.html.twig' , array('itemss'=>$itemss ));




            }
           return $this->render('ToDoBundle:Default:index.html.twig', array('form' => $form->createView()));
        }



        return $this->render('ToDoBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

}
