<?php
namespace Controllers;

class ControllerCategorie extends BaseController{
    protected $model = "categorie";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("categorie/categories", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("categorie/categorieDetail", $data);
          }

}


?>