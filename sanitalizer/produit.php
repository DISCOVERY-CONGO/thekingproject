<?php
use Controllers\ControllerProduit;
if (isset($_POST['produit'])) {
   
   $name = htmlspecialchars(trim($_POST['nom']));
   $quantite = htmlspecialchars(trim($_POST['quantite']));
   $categorie = htmlspecialchars(trim($_POST['categorie']));
   $prix =  htmlspecialchars(trim($_POST['prix']));

   $data = array('nom'=>$name,'quantite'=>$quantite,'categorie'=>$categorie,'prix'=>$prix);

   $server = new ControllerProduit();
   $server->store($data);
}