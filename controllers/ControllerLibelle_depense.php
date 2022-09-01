<?php
namespace Controllers;

class ControllerLibelle_depense extends BaseController{
    protected $model = "libelle_depense";
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("Libelle/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("Libelle/libelleDetail", $this->data_model->one($this->id));
          }

}


?>