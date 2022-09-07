<?php
namespace Controllers;

class ControllerUser extends BaseController{
    protected $model = "user";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("index", $data);
          }

          protected function route(){
            if($this->get("login")){
                $this->affichage->views("auth/login");
            } 
          }

}


?>