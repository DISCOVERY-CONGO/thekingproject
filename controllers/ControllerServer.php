<?php
namespace Controllers;

class ControllerServer extends BaseController{
    protected $model = "server";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("server/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("server/serverDetail", $this->data_model->one($this->id));
          }

}


?>