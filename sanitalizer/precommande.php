<?php
use Controllers\ControllerCommande;

$structure = new \models\structure;
$commande = new \Models\Commande;

if (isset($_POST['precommande'])) {
   

   $table = htmlspecialchars(trim($_POST['table_id']));
  

   $data = $table;
  
   $server = new ControllerCommande();
   
   $table = new \Models\Data_table;
  $server->store_precommande($data);
//   $table->change_status($data);
      

    // var_dump( header("location:".$structure->redirect['domaine']."/commandes/$commandes"));
  
   
}