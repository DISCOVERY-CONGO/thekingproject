<?php
namespace Controllers;

class ControllerCategorie extends BaseController{
    protected $model = "categorie";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        foreach ($data as $key => $value) {
            var_dump($value->created_at);
        }
        //return $this->affichage->views("categorie/categories", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("categorie/categorieDetail", $data);
          }

          protected function route(){
            
            if($this->get("/newCategorie")){
                $this->affichage->views('categorie/createCategorie');
            }
        }

}


?>