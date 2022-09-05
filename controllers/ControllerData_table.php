<?php
namespace Controllers;
use \models\Data_table;
class ControllerData_table extends BaseController{
    protected $model = "data_table";
    
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("table/tables", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("table/tableDetail", $data);
          }

          protected function route(){
            if($this->get("tables")){
                $this->affichage->views("table/tables");
            } 
            if($this->get("newTable")){
                $this->affichage->views("table/createTable");
            } 
            if($this->get("editTable")){
                $this->affichage->views('table/editTable');
            }
}

    public function insertion($data){
            
            $base = new Data_table();
            $base->insert($data);
    }


}


?>