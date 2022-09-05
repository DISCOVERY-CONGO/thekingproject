<?php 

namespace Models;

use \models\base;

class Data_table extends Model{
    protected $connect;
    protected $database;
    protected $nom;
    protected $places;

protected $attributes=[
    "name"
];

public function __construct()
{
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function insert($data){
    $this->nom = $data['nom'];
    $this->places = $data['places'];

    $sql = "INSERT INTO data_table  (name,places)  VALUES (?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$this->nom,$this->places]);
    
}


}




?>