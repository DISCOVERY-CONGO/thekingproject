<?php
namespace Controllers;
use Models\Client;
use \Models\Commande;
use \Models\Rapport;
use Models\Produit;
use \Repositorie\HomeRepositorie;
class HomeController extends BaseController{
    protected $model = "produit";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
     return $this->affichage->views("index", $this->data_model->all());
    }

    protected function one($data){
        return $this->affichage->views("index", $this->data_model->one($this->id));
       }
   
       protected function route(){
       
        if($this->get("/")){
            if (!isset($_SESSION['role'])) {
                header("location:login");
                //header("location:register");

            }else{
                $repositorie = new HomeRepositorie();
                // $commande = new Commande;
                // $count_product = $repositorie->count_produit();
                // $count_client = $repositorie->count_client();
                // $clients = new Client();
                // $command = $commande->not_approved();
                // $revenue = $commande->revenue();

                $product = new Produit();
                $data = ['produits'=>$product];
                $produits = $product->all_products();
              
                $data = ['produits'=>$produits];
                
                $this->affichage->views("index",$data);


            }

        }


}

}
?>