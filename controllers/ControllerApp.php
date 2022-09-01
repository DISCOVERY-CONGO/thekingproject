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

<<<<<<< HEAD
	$control = new HomeController();
	if($page=="/"){
	$control->index();	
	}
	elseif($page == "clients"){
		$control->clients();
	}
=======
	$control = new Controller();
	$control->start();	
	
	
	
>>>>>>> f704cdb226e956292bed3e0c933e6f4a8318b1b3

	
		
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