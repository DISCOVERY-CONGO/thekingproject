<?php
namespace Controllers;

class ControllerCommande extends BaseController{
    protected $model = "commande";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("index", $data);
          }

          protected function route(){
            if($this->get("commandes")){
                $this->affichage->views("commands/commands");
            } 
            if($this->get("newCommmand")){
                $this->affichage->views('categorie/createCategorie');
            }
        }

}


?>