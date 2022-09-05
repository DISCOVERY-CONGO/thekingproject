<?php 

namespace Models;
use \models\base;

class Categorie extends Model{

    protected $database;
    protected $connect;
protected $attributes=[
    "nom"
];


public function __construct()
{
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}


public function inserer($data){
    $nom = $data['nom'];
   

    $sql = "INSERT INTO categorie (nom) VALUES (?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom]);
}

public function all_categories(){
    $sql = "SELECT * FROM categorie ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}




}




?>