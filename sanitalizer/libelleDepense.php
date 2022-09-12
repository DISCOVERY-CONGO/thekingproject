<?php

use Controllers\ControllerLibelle_depense;

$structure = new \models\structure;
if (isset($_POST['libelle'])) {
   var_dump($_POST);
   
   $montant = htmlspecialchars(trim($_POST['montant']));
   $server_id = htmlspecialchars(trim($_POST['server_id']));
   $depense_id = htmlspecialchars(trim($_POST['depense_id']));
  

   $data = array('montant'=>$montant,'server_id'=>$server_id,'depense_id'=>$depense_id);

   $server = new ControllerLibelle_depense();
   $server->store_libelleDepense($data);
  header("location:".$structure->redirect['domaine']);
}