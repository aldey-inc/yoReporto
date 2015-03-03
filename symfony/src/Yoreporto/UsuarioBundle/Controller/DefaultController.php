<?php

namespace Yoreporto\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoUsuarioBundle:Default:index.html.twig', array('name' => $name));
    }
}
