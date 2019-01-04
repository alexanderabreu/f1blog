<?php

namespace MiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
   
	public function indexAction()
    {
// var_dum agregado para depurar el error para mostrar el index		
//        $a = array(1, 2, array("a", "b", "c"));
//		var_dump($a);
//		die();
		
		return $this->render('@Mi/Default/index.html.twig');
    }
}
