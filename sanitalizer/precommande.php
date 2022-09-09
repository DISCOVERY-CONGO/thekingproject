<?php
use Controllers\ControllerCommande;
if (isset($_POST['precommande'])) {
   
   $name = htmlspecialchars(trim($_POST['name']));
   $client = htmlspecialchars(trim($_POST['client_id']));
   $table = htmlspecialchars(trim($_POST['table_id']));
  

   $data = array('name'=>$name,'client_id'=>$client,'table_id'=>$table);

   $server = new ControllerCommande();
   $server->store_precommande($data);
}