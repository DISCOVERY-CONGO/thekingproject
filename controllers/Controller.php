<?php  

namespace controllers;

use \models\structure;
use \models\Produit;


class Controller{

public $affichage;

public function test(){
    $this->affichage = new Affichage();
    $produit = new Produit();
    //$produit->create(['p1', 25, 5, 254]);
    //$this->affichage->views("index");
   
}
    



}



?>