<?php

namespace Yoreporto\ActividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Yoreporto\ActividadBundle\Form\ActivityType;

use Yoreporto\ActividadBundle\Entity\Activity;

use Yoreporto\ProyectoBundle\Entity\Project;

use Yoreporto\ReporteBundle\Entity\Report;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoActividadBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newActivityAction(Request  $request){
    	$activity = new Activity();
    	/*
    	


    	$project = new Project();

    	$report = new Report();

		

    	$activity->setProjectproject($project);

    	$activity->set

    	
    	*/
    	$form= $this->createForm(new ActivityType(),$activity);

    	$form->handleRequest($request);

    	if($form->isValid() ){
    		$em=$this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();
            return $this->redirect( $this->generateUrl('yoreporto_actividad_homepage') );
    	}

    	return $this->render('YoreportoActividadBundle:Default:newActivity.html.twig',array('form'=>$form->createView()));
    }
}
