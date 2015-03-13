<?php

namespace Yoreporto\ActivityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Yoreporto\ActivityBundle\Form\ActivityType;
use Yoreporto\ActivityBundle\Entity\Activity;


use Yoreporto\ActivityBundle\Form\ReportType;
use Yoreporto\ActivityBundle\Entity\Report;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoActivityBundle:Default:index.html.twig', array('name' => $name));
    }
    public function newActivityAction(Request $request){

    	$activity= new Activity();   	


    	$form= $this->createForm( new ActivityType(), $activity );

    	$form->handleRequest($request);

		if($form->isValid()){
			$em=$this->getDoctrine()->getManager();
			$em->persist($activity);
			$em->flush();

			return $this->redirect($this->generateUrl('yoreporto_activity_homepage',array('name'=>'Listo')));
		}		

    	return $this->render("YoreportoActivityBundle:Default:newActivity.html.twig",array('form' => $form->createView()));

    }

    public function newReportAction(Request $request){

    	$report= new Report();
    	
    	$activity1= new Activity();
    	$activity2= new Activity();
    	//$activity3= new Activity();
    	//$activity4= new Activity();

    	$report->getActivities()->add($activity1);
    	$report->getActivities()->add($activity2);
    	//$report->getActivities()->add($activity3);
    	//$report->getActivities()->add($activity4);

    	//$report->addActivity($activity1);

    	$form= $this->createForm( new ReportType(), $report);

    	$form->handleRequest($request);
    	
    	if($form->isValid()){

    		$em = $this->getDoctrine()->getManager();

    		$em-> persist($report);


    		//$em-> persist($activity1);
    		//$em-> persist($activity2);
    		$em->flush();


    		foreach ($report->getActivities() as $activity ){
    			$activity->setIdReport($report);

    			//$activity->setIdUser($);
    			
    			$em->persist($activity);
    		}
    		
    		$em->flush();

    		return $this->redirect($this->generateUrl('yoreporto_activity_homepage', array('name' => 'Hola2')));
    	}

    	return $this->render("YoreportoActivityBundle:Default:newReport.html.twig",array('form' => $form->createView()));
    }
}
