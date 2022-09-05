<?php
namespace Controllers;

use \Models\base;
use \Models\Client;
class ControllerClient extends BaseController{
    protected $model = "client";
    protected $client;
    //implementez les methodes all et one pour afficher les données 

    
    protected function all($data){
        return $this->affichage->views("client/clients", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("client/clientDetail", $data);
          }

          protected function route(){
            $this->client = new Client();

            $data = $this->client->all_clients();

           if ($this->get("clients")){
            $this->affichage->views('client/clients',$data);
           }
            if($this->get("newClient")){
                $this->affichage->views('client/create');
            }
        }
    public function insertion($data){
       $base = new base();
       $base->inserer($data, 'client', 'nom');
       header('location:clients');
    }

}


?>