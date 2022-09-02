<?php
namespace Controllers;

class ControllerLibelle_depense extends BaseController{
    protected $model = "libelle_depense";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("Libelle/libelles", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("Libelle/libelleDetail", $data);
          }

}


?>