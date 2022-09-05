<?php 

namespace Models;
use \models\base;

class Client extends Model{

    protected $connect;
    protected $database;
    protected $req;

protected $attributes=[
    "nom"
];

public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function all_clients(){
        $sql = "SELECT * FROM client ORDER BY id DESC";
        $this->req = $this->connect->query($sql);
        $result = $this->req->fetchAll();
        return $result;
}

}




?>