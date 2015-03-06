<?php

namespace Yoreporto\ActividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Yoreporto\ActividadBundle\Form\ActivityType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoActividadBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newActivityAction(){
    	$form= $this->createForm(new ActivityType());

    	return $this->render('YoreportoActividadBundle:Default:newActivity.html.twig',array('form'=>$form->createView()));
    }
}
