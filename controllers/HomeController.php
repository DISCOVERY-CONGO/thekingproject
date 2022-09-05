<?php
namespace Controllers;
use Models\Client;
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
            $clients = new Client();
            $data = $clients->all_clients();
            $this->affichage->views("index",$data);
        }


}

}
?>