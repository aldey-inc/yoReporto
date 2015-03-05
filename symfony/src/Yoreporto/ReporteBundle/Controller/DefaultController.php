<?php

namespace Yoreporto\ReporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Yoreporto\ReporteBundle\Form\ReportType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoReporteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newReportAction(){
    	$form= $this->createForm(new ReportType());

    	return $this->render("YoreportoReporteBundle:Default:newReport.html.twig", array('form'=> $form->createView()));
    }
}
