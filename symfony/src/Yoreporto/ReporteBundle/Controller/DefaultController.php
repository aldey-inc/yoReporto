<?php

namespace Yoreporto\ReporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoReporteBundle:Default:index.html.twig', array('name' => $name));
    }
}
