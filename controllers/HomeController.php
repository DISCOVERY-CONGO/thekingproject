<?php
namespace Controllers;
use Models\Client;
use \Models\Commande;
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
            $repositorie = new HomeRepositorie();
            $commande = new Commande;
            $count_product = $repositorie->count_produit();
            $count_client = $repositorie->count_client();
            $clients = new Client();
            $command = $commande->not_approved();
           
            $data = ['clients'=>$command, 'count_product'=>$count_product,'count_client'=>$count_client];
            
            $this->affichage->views("index",$data);
        }


}

}
?>