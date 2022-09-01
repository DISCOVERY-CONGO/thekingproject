<?php

namespace controllers;
use \models\structure;
use \models\Produit;

class HomeController {

    public $affichage;

public function index(){
    $this->affichage = new Affichage();
    $produit = new Produit();
    //$produit->create(['p1', 25, 5, 254]);
    $this->affichage->views("index");
   
}
public function clients(){
    $this->affichage = new Affichage();
    $produit = new Produit();
    //$produit->create(['p1', 25, 5, 254]);
    $this->affichage->views("client/clients");
   
}

}