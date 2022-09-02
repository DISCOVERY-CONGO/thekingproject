<?php
namespace Controllers;

class ControllerProduit extends BaseController{
    protected $model = "produit";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
     return $this->affichage->views("index", $data);
    }

    protected function one($data){
        return $this->affichage->views("index", $data);
       }

       protected function route(){
        if($this->get("about/[0-9]+")){
            $this->affichage->views("index");
        }
       }
   


}


?>