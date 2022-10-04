<?php
namespace Controllers;
use \Models\Server;
use \Models\Data_table;

class ControllerServer extends BaseController{
    protected $model = "server";
 
    protected function all($data){
        return $this->affichage->views("servant/servants", $data);
    }
   
    protected function one($data){
           return $this->affichage->views("index", $data);
    }
    
    protected function route(){

        if($this->get('servers')){
            $server = new Server;
            $table = new Data_table;
            $tables = $table->all_tables();
            $resultat = $server->all_servers();
            $count_server = $server->count_server();
            $data = ['count_server'=>$count_server,'all_servers'=>$resultat,'table'=>$tables];
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

    public function     affectation($data){
        $server = new Server();
        $server->store_affectation($data);
        header('location:servers');
    }

}


?>