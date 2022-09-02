<?php
namespace Controllers;

class ControllerData_table extends BaseController{
    protected $model = "data_table";
    
    //implementez les methodes all et one pour afficher les données 

    protected function all(){
        return $this->affichage->views("tables/index", $this->data_model->all());
       }
   
       protected function one(){
           return $this->affichage->views("tables/tableDetail", $this->data_model->one($this->id));
          }

}


?>