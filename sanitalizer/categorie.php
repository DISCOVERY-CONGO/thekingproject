<?php
use Controllers\ControllerCategorie;
if (isset($_POST['categorie'])) {
   
   $name = htmlspecialchars(trim($_POST['nom']));


   $data = array('nom'=>$name);

   $server = new ControllerCategorie();
   $server->store($data);
}