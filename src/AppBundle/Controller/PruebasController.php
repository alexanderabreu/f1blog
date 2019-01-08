<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PruebasController extends Controller
{
	
	
//	public function indexAction(Request $request) {
//		
//		// replace this example code with whatever you need
//        return $this->render('@App/pruebas/index.html.twig', 
//				array('texto' => "Texto enviado desde el controlador Prueba"));
//		
//	}
	
	// PASANDO PARAMETROS POR LAS URL | SE AGREGA name y surname a la routing y aquí
	
	
	
	public function indexAction(Request $request, $name, $page) {
		
//		// REDIRECCIONAMIENTO
//		return $this->redirect($this->generateUrl("helloworld"));
		
		$productos = array(
					array("producto"=>"Consola","Precio"=>200),
					array("producto"=>"Consola 2","Precio"=>300),
					array("producto"=>"Consola 3","Precio"=>400),
					array("producto"=>"Consola 4","Precio"=>500),
					array("producto"=>"Consola 5","Precio"=>600),
					array("producto"=>"Consola 6","Precio"=>700),
		);
		
		$fruta = array("manzana"=>"golden", "pera"=>"rica");
		
		
		// replace this example code with whatever you need
        return $this->render('@App/pruebas/index.html.twig', 
				array('texto' => $name. " - " .$page, 
					  'productos' => $productos,
					  'fruta'    => $fruta
				)); 
	}
}