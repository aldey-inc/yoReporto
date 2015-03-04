<?php

namespace Yoreporto\UsuarioBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Routing\Router;

class LoginListener
{
	

		public function __construct(Router $router){
		
		}
		public function onSecurityInteractiveLogin(InteractiveLoginEvent $event){
			
		}

		public function onKernelResponse(FilterResponseEvent $event){
		
		}
	
}