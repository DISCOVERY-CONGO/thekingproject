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
          protected function route(){
            if ($this->get("libelles")){
             $this->affichage->views('Libelle/libelles');
            }
             if($this->get("newLibelle")){
                 $this->affichage->views('Libelle/createLibelle');
             }
         }

}


?>