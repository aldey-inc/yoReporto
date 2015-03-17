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
        $em = $this->getDoctrine()->getManager();

    	$report= new Report();
    	
    	$activity1= new Activity();
    	$activity2= new Activity();
    	//$activity3= new Activity();
    	//$activity4= new Activity();

        $activitiesAsigned= $em->getRepository('YoreportoActivityBundle:Projecthasuser')->findByIduser('2');

        $activities=array();

        foreach ($activitiesAsigned as $act) {
            $activities[$act->getIdproject()->getName()]=new Activity();
            $activities[$act->getIdproject()->getName()]->setIdproject($act->getIdproject());
            $activities[$act->getIdproject()->getName()]->setIduser($act->getIduser());
            $report->getActivities()->add($activities[$act->getIdproject()->getName()]);
        }

    	
    	//$report->getActivities()->add($activity2);
    	//$report->getActivities()->add($activity3);
    	//$report->getActivities()->add($activity4);

    	//$report->addActivity($activity1);

    	$form= $this->createForm( new ReportType(), $report);

    	$form->handleRequest($request);
    	
    	if($form->isValid()){

    		

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

    	return $this->render("YoreportoActivityBundle:Default:newReport.html.twig",array('form' => $form->createView(),'activities'=>$activities));
    }

    public function newWeeklyReportAction(){

        $em=$this->getDoctrine()->getManager();
        $activitiesAsigned= $em->getRepository('YoreportoActivityBundle:Projecthasuser')->findByIduser('2');





        return $this->render("YoreportoActivityBundle:Default:newWeeklyReport.html.twig", array('activitiesAsigned'=>$activitiesAsigned));
    }
    public function viewActivitiesAction(){
        $em=$this->getDoctrine()->getManager();

        $activitiesDone= $em->getRepository('YoreportoActivityBundle:Activity')->findByIduser('1');

        return $this->render('YoreportoActivityBundle:Default:viewActivities.html.twig',array('activitiesDone'=>$activitiesDone));      
    }
}
