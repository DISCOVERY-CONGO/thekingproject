<?php 

namespace Models;

use \models\base;
class Produit extends Model{

    protected $database;
    protected $connect;

protected $attributes=[
    "nom", "quantite", "categorie", "prix"
];


public function __construct()
{
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function inserer($data){
    $nom = $data['nom'];
    $quantite = $data['quantite'];
    $categorie = $data['categorie'];
    $prix = $data['prix'];

    $sql = "INSERT INTO produit (nom,quantite,categorie,prix) VALUES (?,?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom,$quantite,$categorie,$prix]);
}

public function all_servers(){
    $sql = "SELECT * FROM produit ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}


}




?>