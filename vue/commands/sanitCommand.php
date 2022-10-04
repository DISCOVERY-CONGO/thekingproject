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
                $command_id = $_POST['command_id'];
                $quantite = $_POST["quantite"];
                
                $data = ['produit_id'=>$product_id,'command_id'=>$command_id,'quantite'=>$quantite];

                $productResult = $produit->produit_by_id($product_id);
                
                $commandResult = $commande->getCommandByProduct($product_id, $command_id);
                
                
                if (!empty($commandResult)) {
                    
                    $newQuantity = $commandResult[0]["quantite"] + $_POST["quantite"];
                    $commande->updateCommandQuantity($newQuantity, $commandResult[0]["id"]);
                    header("location:".$structure->redirect['domaine']."/newCommand/$command_id");
                    
                } else {
                    
                    $command_controller->store_command($data);
                    $commande->deleteCommandItem($product_id);
                    header("location:".$structure->redirect['domaine']."/newCommand/$command_id");
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

// confirm commande
if(isset($_POST['confirm_commande'])){
    $table_id = htmlspecialchars(trim($_POST['table_id']));
    $precom_id = htmlspecialchars(trim($_POST['precom_id']));
    $data = ['table_id'=>$table_id, 'precom_id'=>$precom_id];
  // $commande_conf = $command_controller->confirm_commande($data);

        $recu = $commande->get_commandById($precom_id);



}



?>