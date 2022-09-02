<?php
namespace Controllers;

class ControllerClient extends BaseController{
    protected $model = "client";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("client/index",$data);
       }
   
    protected function one($data){
           return $this->affichage->views("client/clientDetail", $data);
          }

    protected function route(){
            if($this->get("client/[0-9]+")){
                $this->affichage->views("client/clients");
            }
    }

}


?>