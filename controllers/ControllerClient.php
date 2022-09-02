<?php
namespace Controllers;

class ControllerClient extends BaseController{
    protected $model = "client";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("client/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("client/clientDetail", $this->data_model->one($this->id));
          }

}


?>