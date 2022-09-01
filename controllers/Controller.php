<?php  

namespace controllers;




class Controller{


<<<<<<< HEAD
public function test(){
    $this->affichage = new Affichage();
    $produit = new Produit();
    //$produit->create(['p1', 25, 5, 254]);
    $this->affichage->views("index");
=======

public function start(){
 
    $c1 = new ControllerProduit();
    $c1->call();

    $c1 = new ControllerCategorie();
    $c1->call();

    $c1 = new ControllerClient();
    $c1->call();

    $c1 = new ControllerCommande();
    $c1->call();

    $c1 = new ControllerData_table();
    $c1->call();

    $c1 = new ControllerLibelle_depense();
    $c1->call();

    $c1 = new ControllerMouvement_commande();
    $c1->call();

    $c1 = new ControllerRole();
    $c1->call();

    $c1 = new ControllerServer();
    $c1->call();

    $c1 = new ControllerUser();
    $c1->call();
 
>>>>>>> f704cdb226e956292bed3e0c933e6f4a8318b1b3
   
}

    

}



?>