<?php
namespace Controllers;

class ControllerServer extends BaseController{
    protected $model = "server";
    //implementez les methodes all et one pour afficher les données 
    protected function all($data){
        return $this->affichage->views("index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("index", $data);
          }

}


?>