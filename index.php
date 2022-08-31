<?php
// header('Access-Control-Allow-Origin: *');
session_start();

 include("init.php");
 use \controllers\ControllerApp;
 $app = new controllerApp();
 
 // var_dump($_GET);
 if(isset($_GET["page"])){
 $app->get($_GET['page']);
}else{
    $app->get(".");
}
  ?>


