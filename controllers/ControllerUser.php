<?php
namespace Controllers;

class ControllerUser extends BaseController{
    protected $model = "user";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("user/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("user/userDetail", $this->data_model->one($this->id));
          }

}


?>