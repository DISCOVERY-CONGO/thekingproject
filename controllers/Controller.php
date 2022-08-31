<?php  

namespace controllers;

use \models\structure;


class Controller{

public $affichage;

public function test(){
    $this->affichage = new Affichage();
    $this->affichage->views("index");
   
}
    



}



?>