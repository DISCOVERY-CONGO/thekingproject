<?php
use Controllers\ControllerCommande;
use Controllers\ControllerMouvement_commande;

$structure = new \models\structure;
$commande = new \Models\Commande;
$mouvement = new ControllerMouvement_commande;
$server = new ControllerCommande();
$table = new \Models\Data_table;

if (isset($_POST['precommande'])) {
   $table = htmlspecialchars(trim($_POST['table_id']));
   $data = $table;
  $server->store_precommande($data);
//   $table->change_status($data)  // var_dump( header("location:".$structure->redirect['domaine']."/commandes/$commandes"));

}

if (isset($_POST['filtrer'])) {
  $date_from = htmlspecialchars($_POST['from_date']);
  $to_date =  htmlspecialchars($_POST['to_date']);
  $data = ['from_date'=>$date_from,'to_date'=>$to_date];
  $mouvement->filter_by_date($data);
}