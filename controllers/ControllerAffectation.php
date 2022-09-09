<?php
namespace Controllers;
use Models\structure;

class ControllerAffectation extends BaseController{
    protected $model = "affectation";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        $structure  = new structure();
        header("location:".$structure->definition["domaine"]."/trucmashin");
        var_dump($data);
    }

    protected function route(){
        if($this->get('affectations/servers/[0-9]+')){
            $id = (int) explode("/", $this->request['get']['page'])[2];
            $data = $this->data_model->get_affectation_by_server($id);
             var_dump($data);


        }
    }



}


?>