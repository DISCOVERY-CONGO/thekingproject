<?php
namespace Controllers;

class ControllerCategorie extends BaseController{
    protected $model = "categorie";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("categorie/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("categorie/categorieDetail", $this->data_model->one($this->id));
          }

}


?>