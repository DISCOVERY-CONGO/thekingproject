<?php 

namespace Models;


class Depense extends Model{
    protected $connect;
    protected $database;

protected $attributes=[
    "name"
];

public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function store($data){
    $nom = $data['nom'];
    $username = $data['username'];
    $montant = $data['montant'];
    $sql = "INSERT INTO depense (name,username,montant) VALUES (?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom,$username,$montant]);
}

public function all_depenses(){
    $sql = "SELECT * FROM depense ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}

}




?>