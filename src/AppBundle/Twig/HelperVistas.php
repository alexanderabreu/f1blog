<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Twig;

class HelperVistas extends \Twig_Extension{
	public function getFunctions() {
		return array(
			'generateTable' => new \Twig_Function_Method($this, 'generateTable')
		);
		
	}
	
//	public function generateTable( $resultSet) {
//		$table="<table class='table' table border:1>";
//		for($i=0; $i<count($resultSet); $i++) {
//			$table.="<tr>";
//			for($f=0;$f<count($resultSet)[$i];$f++){
//				$resultSet_values= array_values($resultSet)[$i];
//				$table.="<td>" .$resultSet_values[$f]."</td>";
//			}
//			$table.="</tr>";
//		}
//		$table.="</table>";
//		return $table;
	
	public function generateTable($num_columns, $num_rows) {
		$table="<table class='table' table border:1px >";
		for($i=0; $i<$num_rows; $i++) {
			$table.="<tr>";
			for($f=0;$f<$num_columns;$f++){
				$table.="<td> Columna</td>";
			}
			$table.="</tr>";
		}
		$table.="</table>";
		return $table;
	
}

public function getName() {
	return "app_bundle";
}
	
}
