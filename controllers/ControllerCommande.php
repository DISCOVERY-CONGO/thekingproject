<?php
namespace Controllers;

class ControllerCommande extends BaseController{
    protected $model = "commande";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("commands/index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("commands/commandDetail", $data);
          }

}


?>