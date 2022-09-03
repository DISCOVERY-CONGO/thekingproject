<?php
namespace Controllers;

class ControllerClient extends BaseController{
    protected $model = "client";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("client/clients", $data);
       }
   
       protected function one($data){
        //var_dump($data);
           return $this->affichage->views("client/clientDetail", $data);
          }

}


?>