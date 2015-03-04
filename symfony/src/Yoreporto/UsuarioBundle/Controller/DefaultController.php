<?php

namespace Yoreporto\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//Añadido por que tienen que ver con la autenticación de usuarios
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YoreportoUsuarioBundle:Default:index.html.twig', array('name' => $name));
    }
    public function loginAction(){
    	$peticion = $this->getRequest();
		$sesion = $peticion->getSession();
		$error = $peticion->attributes->get(
			SecurityContext::AUTHENTICATION_ERROR,
			$sesion->get(SecurityContext::AUTHENTICATION_ERROR)
		);
		return $this->render('YoreportoUsuarioBundle:Default:login.html.twig', array(
			'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
			'error' => $error
		));
    }

    public function workspaceAction(){
    	$usuario = $this->get('security.context')->getToken()->getUser();
		$nombre = $usuario->getName().' '. $usuario->getLastname();
    	return $this->render('YoreportoUsuarioBundle:Default:workspace.html.twig',array('nombre'=>$nombre));
    }
}
