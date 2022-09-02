<?php
namespace Controllers;

class ControllerCommande extends BaseController{
    protected $model = "commande";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("commands/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("commands/commandDetail", $this->data_model->one($this->id));
          }

}


?>