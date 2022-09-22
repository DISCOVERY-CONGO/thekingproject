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
    $categorie = $data['categorie'];
    $prix = $data['prix'];

    $sql = "INSERT INTO produit (nom,categorie,prix) VALUES (?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom,$categorie,$prix]);
}

public function all_products(){
    $sql = "SELECT * FROM produit  ORDER BY id DESC";
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
public function updateProductQuantity($product_id)
{
    $this->req = $this->connect->prepare("UPDATE produit SET quantite= quantite -1 WHERE id = ?");
    $this->req->execute([$product_id]);
    
}

public function updateQuantite($data)
{


    $product_id = $data['produit_id'];
    $quantite = $data['quantite'];

        $sql = "INSERT INTO quantite_produit (id_produit,quantite) VALUES (?,?)";
        $req = $this->connect->prepare($sql);
        $req->execute([$product_id,$quantite]);

}

public function addquantite($data){
    $product_id = $data['produit_id'];
    $quantite = $data['quantite'];
        $this->req = $this->connect->prepare("UPDATE `produit` SET quantite = quantite + ? WHERE id = ?");
        $this->req->execute([$quantite,$product_id]);
  
return true;
}

public function modifierprix($data){
    $product_id = $data['produit_id'];
    $prix = $data['prix'];
        $this->req = $this->connect->prepare("UPDATE `produit` SET prix = ? WHERE id = ?");
        $this->req->execute([$prix,$product_id]);
  
return true;
}

}




?>