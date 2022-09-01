<?php  

namespace controllers;


use \models\Structure;



class controllerApp{

private $user;
private $structure;
private $database;
public $affichage;
public function __construct(){
     
	$this->structure = new structure();
	$this->affichage = new Affichage();

}

public function init_pages(){
 
}



public function get($page){

	$control = new Controller();
	if($page=="/"){
	$control->test();	
	}
	
	

 	
}


private function controller_admin($context){
	  		
}


private function root_admin($requirement){
	if($this->user->administration!=$requirement){
    header("location:connexion");
	}
}



private function administrateurs(){

}



}



?>