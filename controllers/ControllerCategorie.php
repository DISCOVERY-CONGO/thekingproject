<?php
namespace Controllers;
use \Models\Categorie;
class ControllerCategorie extends BaseController{
    protected $model = "categorie";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("categorie/categories", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("categorie/categorieDetail", $data);
          }

          protected function route(){
            $categories = new Categorie;
            if($this->get("/categories")){
                $data = $categories->all_categories();
                $this->affichage->views("categorie/categories",$data);
            } 
            if($this->get("/newCategorie")){
                $this->affichage->views('categorie/createCategorie');
            }
        }

        
    public function store($data){
        $server = new Categorie();
        $server->inserer($data);
        header('location:categories');
    }

}


?>