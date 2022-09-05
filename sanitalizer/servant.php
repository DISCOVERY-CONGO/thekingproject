<?php
use Controllers\ControllerServer;
if (isset($_POST['servant'])) {
   
   $name = htmlspecialchars(trim($_POST['nom']));
   $suname = htmlspecialchars(trim($_POST['post_nom']));
   $phone = htmlspecialchars(trim($_POST['phone']));
   $sexe = htmlspecialchars(trim($_POST['sexe']));

   $data = array('nom'=>$name,'post_nom'=>$suname,'phone'=>$phone,'sexe'=>$sexe);

   $server = new ControllerServer();
   $server->store($data);
}