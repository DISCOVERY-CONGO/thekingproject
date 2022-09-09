<?php 

namespace Models;


class Depense extends Model{

protected $attributes=[
    "name"
];

public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function store($data){
    $sql = "INSERT INTO depense (name) VALUES (?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$data]);
}

}




?>