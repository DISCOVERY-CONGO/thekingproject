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

public function all_products(){
    $sql = "SELECT * FROM produit ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}

public function count(){
    
    $this->req = $this->connect->query("SELECT * FROM produit");
    return $this->req->rowCount();
}

public function produit_by_id(int $id){
    $this->req = $this->connect->prepare("SELECT * FROM produit WHERE id = ?");
    return $this->req->execute([$id]);
}

}




?>