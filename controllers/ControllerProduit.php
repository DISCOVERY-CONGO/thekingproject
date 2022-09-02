<?php
namespace Controllers;

class ControllerProduit extends BaseController{
    protected $model = "produit";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
     return $this->affichage->views("index", $data);
    }

    protected function one($data){
        return $this->affichage->views("index", $data);
       }

       protected function route(){
        if($this->get("produits")){
            $this->affichage->views("product/products");
        }elseif($this->get("newProduct")){
            $this->affichage->views(("product/createProduct"));
        }
       }
   


}


?>