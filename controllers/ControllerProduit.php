<?php
namespace Controllers;
use \Models\Categorie;
use Models\Produit;

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
            $product = new Produit();
            $data = $product->all_products();
            $this->affichage->views("product/products",$data);
        }elseif($this->get("newProduct")){
            $categories = new Categorie();
            $data = $categories->all_categories();
            $this->affichage->views("product/createProduct",$data);
        }
       }
       public function store($data){
        $server = new Produit();
        $server->inserer($data);
        header('location:produits');
    }


}


?>