<?php
namespace Controllers;

class ControllerProduit extends BaseController{
    protected $model = "produit";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
     return $this->affichage->views("index", $this->data_model->all());
    }

    protected function one(){
        return $this->affichage->views("index", $this->data_model->one($this->id));
       }
   


}


?>