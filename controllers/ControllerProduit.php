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
        $categories = new Categorie();
        if($this->get("produits")){
            $product = new Produit();
            $produits = $product->all_products();
            $categories = $categories->all_categories();
            $data = ['produits'=>$produits,'categories'=>$categories];
          
            $this->affichage->views("product/products",$data);
        }elseif($this->get("newProduct")){
        
            $data = $categories->all_categories();
            $this->affichage->views("product/createProduct",$data);
        }
       }

       public function store($data){
        $server = new Produit();
        $server->inserer($data);
        header('location:produits');
    }

    public function update_quantity($data){
        $product = new Produit();
        $product->addquantite($data);
        $product->updateQuantite($data);
      
        header('location:produits');

    }

    public function update_price($data){
        $product = new Produit();

        $product->modifierPrix($data);
        header('location:produits');

    }


}


?>