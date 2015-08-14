<?php

namespace ToDoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use ToDoBundle\Entity\items;
use ToDoBundle\Form;



class MainControllerController extends Controller
{
    /**
     * @Route("/main")
     */
    public function mainAction()
    {
        $id=0;
        $repository = $this->getDoctrine()
            ->getRepository('ToDoBundle:items');
        $itemss = $repository->findAll();

        $request =  $this->get('request');
        if($request->getMethod() == 'POST') {





        }





        return $this->render('ToDoBundle:Default:main.html.twig' , array('itemss'=>$itemss )) ;
    }


}
