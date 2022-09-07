<?php

use \Models\Commande;
use \Models\Produit;
use \Controllers\ControllerCommande;
use \models\structure;

$commande = new Commande;
$structure = new structure();
$produit = new Produit;
$command_controller = new ControllerCommande;



if (! empty($_POST["action"])) {
   

    
    
    switch ($_POST["action"]) {
        case "add":
            if (! empty($_POST["quantite"])) {

                $product_id = $_POST['produit_id'];
                $client_id = $_POST['client_id'];
                $quantite = $_POST["quantite"];
                $table = $_POST['table_id'];
                $data = ['produit_id'=>$product_id,'client_id'=>$client_id,'quantite'=>$quantite,'table_id'=>$table];

                $productResult = $produit->produit_by_id($product_id);
                
                $commandResult = $commande->getCommandByProduct($product_id, $client_id);
                
                
                if (! empty($commandResult)) {
                    
                    $newQuantity = $commandResult[0]["quantite"] + $_POST["quantite"];
                    $commande->updateCommandQuantity($newQuantity, $commandResult[0]["id"]);
                    header("location:".$structure->redirect['domaine']."/newCommand/$client_id");
                    
                } else {
                    
                    $commande->store($data);
                    header("location:".$structure->redirect['domaine']."/newCommand/$client_id");
                }
            }
            break;
        case "remove":

            // Delete single entry from the cart
            $commande->deleteCommandItem($_POST['command_id']);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
?>