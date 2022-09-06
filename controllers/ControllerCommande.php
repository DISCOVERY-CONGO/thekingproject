<?php
namespace Controllers;

class ControllerCommande extends BaseController{
    protected $model = "commande";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("commands/index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("index", $data);
          }

          protected function route(){
            if($this->get("commandes/today")){
                $data = $this->data_model->today();
                var_dump($data);
                //$this->affichage->views("commands/commmands");
            } 
            if($this->get("newCommmand")){
                $this->affichage->views('categorie/createCategorie');
            }
        }

}


?>