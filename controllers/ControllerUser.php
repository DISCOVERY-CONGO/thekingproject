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
            if($this->get("register")){
                $this->affichage->views("auth/register");
            } 

            if($this->get("logout")){
                session_destroy();
                $structure = new \models\structure();
               return header("location:".$structure->redirect['domaine']."/login");
            } 
          }

}


?>