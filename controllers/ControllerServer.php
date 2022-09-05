<?php
namespace Controllers;
use \Models\Server;

class ControllerServer extends BaseController{
    protected $model = "server";
    //implementez les methodes all et one pour afficher les données 
    protected function all($data){
        return $this->affichage->views("servant/servants", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("index", $data);
          }
    protected function route()
    {
        if($this->get('servers')){
            return $this->affichage->views("servant/servants");

        }
        if ($this->get('newServant')){
            return $this->affichage->views(("servant/createservant"));
        }
    }

    public function store($data){
        $server = new Server();
        $server->inserer($data);
        header('location:servers');
    }

}


?>