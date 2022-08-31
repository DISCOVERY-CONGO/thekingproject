<?php 
namespace controllers;

use  \models\structure;


class affichage {

private $contenu;
private $base;
private $supergenie;
public $constructeur;
public $definition_page;

/* @$contenu designe le contenu dont vous voulez afficher  
**/
	public function __construct($name=""){


	}
	
	
public function vue($data){
	include_once 'vues/base.php';
	ecrire($data);
}
public function simple_vue($page){
	include("vue/".$page.".php");
}
public function views($page, $data=array()){
	
	
	include("vue/".$page.".php");
}


   
  

}

?>