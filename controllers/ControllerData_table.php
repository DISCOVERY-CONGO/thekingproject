<?php
namespace Controllers;

class ControllerData_table extends BaseController{
    protected $model = "data_table";
    
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("tables/index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("tables/tableDetail", $data);
          }

}


?>