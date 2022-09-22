<?php
use Controllers\ControllerProduit;
$server = new ControllerProduit();
// ajout d'un nouveau produit
if (isset($_POST['produit'])) {
   
   $name = htmlspecialchars(trim($_POST['nom']));
   $categorie = htmlspecialchars(trim($_POST['categorie']));
   $prix =  htmlspecialchars(trim($_POST['prix']));

   $data = array('nom'=>$name,'categorie'=>$categorie,'prix'=>$prix);


   $server->store($data);
}

if (isset($_POST['addQuantite'])) {
   if (!empty($_POST['quantite'])) {
      
      $quantite = htmlspecialchars(trim($_POST['quantite']));
      $produit_id = htmlspecialchars(trim($_POST['produit_id']));
      
      $data = ['quantite'=>$quantite,'produit_id'=>$produit_id];
      $server->update_quantity($data);
   }
}

if (isset($_POST['modifierPrix'])) {
   if (!empty($_POST['prix'])) {
      
      $quantite = htmlspecialchars(trim($_POST['prix']));
      $produit_id = htmlspecialchars(trim($_POST['produit_id']));
      
      $data = ['prix'=>$quantite,'produit_id'=>$produit_id];
      $server->update_price($data);
   }
}