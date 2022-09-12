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
            $server = new Server;
           $resultat = $server->all_servers();
           $count_server = $server->count_server();
           $data = ['count_server'=>$count_server,'all_servers'=>$resultat];
            return $this->affichage->views("servant/servants",$data);

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