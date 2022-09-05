<?php 

use \Controllers\ControllerClient;

if (isset($_POST['client'])) {
   if (!empty($_POST['nom'])) {

    $nom = htmlspecialchars(trim($_POST['nom']));
    
    $client = new ControllerClient();
    $client->insertion(($nom));
   }
}