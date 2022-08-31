<?php 
namespace controllers;

use  \models\structure;


class affichage {

private $contenu;
private $base;
private $supergenie;
public $constructeur;
public $definition_page;
private $structure;

/* @$contenu designe le contenu dont vous voulez afficher  
**/
	public function __construct($name=""){
    $this->structure = new structure();

	}
	public function asset($data){
		return $this->structure->definition['domaine'].'/public/assets/'.$data;
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