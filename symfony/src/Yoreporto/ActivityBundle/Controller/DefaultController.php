<?php

namespace Yoreporto\ActivityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Yoreporto\ActivityBundle\Form\ActivityType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoActivityBundle:Default:index.html.twig', array('name' => $name));
    }
    public function newActivityAction(){

    	$form= $this->createForm( new ActivityType() );

    	return $this->render("YoreportoActivityBundle:Default:newActivity.html.twig",array('form' => $form->createView()));

    }
}
