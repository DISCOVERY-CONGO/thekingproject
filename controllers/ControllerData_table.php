<?php
namespace Controllers;

class ControllerData_table extends BaseController{
    protected $model = "data_table";
    
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        //var_dump($data);
        return $this->affichage->views("tables/tables", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("tables/tableDetail", $data);
          }

          protected function route(){
            if($this->get("newTable")){
                $this->affichage->views("tables/createTable");
            } 
            if($this->get("editTable")){
                $this->affichage->views('tables/editTable');
            }
}
}


?>