<?php

namespace controllers;
use \models\structure;
use \models\Produit;

class ProductController {

    public $affichage;

public function index(){
    $this->affichage = new Affichage();
    $produit = new Produit();
    //$produit->create(['p1', 25, 5, 254]);
    $this->affichage->views("index");
   
}

}