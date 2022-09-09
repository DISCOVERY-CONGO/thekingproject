<?php
namespace Controllers;

class ControllerServeur extends BaseController{
    protected $model = "serveur";
    //implementez les methodes all et one pour afficher les données 
    protected function all($data){
        var_dump($data);
     //echo json_encode($data);
        //return $this->affichage->views("index", $data);
       }
   
       protected function one($data){
            
           return $this->affichage->views("index", $data);
          }

}


?>