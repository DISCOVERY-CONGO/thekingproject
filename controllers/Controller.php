<?php  

namespace controllers;

use \models\structure;
use \models\Produit;


class Controller{

public $affichage;

public function test(){
    $this->affichage = new Affichage();
    $produit = new Produit();
    $p1 =  $produit->find(1);
    var_dump($produit->find(1));
    $produit->update(["nom"=>"viande de soja"], 1);
    $produit->delete(1);
    //$produit->create(['p1', 25, 5, 254]);
    //$this->affichage->views("index");
   
}
    



}



?>