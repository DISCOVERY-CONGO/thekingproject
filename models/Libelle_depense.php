<?php 

namespace Models;

use models\base;

class Libelle_depense extends Model{
protected $database;
protected $connect;
protected $attributes=[
    "title", "montant"
];

public function __construct()
{
    $this->database = new base;
    $this->connect = $this->database->init_connection();
}

public function store($data)
{
    $serve_id = $data['server_id'];
    $depense_id = $data['depense_id'];
    $montant = $data['montant'];
    
   $sql = "INSERT INTO libelle_depense (server_id,depense_id,montant) VALUES (?,?,?)";
   $req = $this->connect->prepare($sql);
   $req->execute([$serve_id,$depense_id,$montant]);
}

public function libelles_depense(){
    $sql = "SELECT libelle_depense.id, libelle_depense.montant as montant, serveur.nom as 
                    serveur_name, depense.name as categorie_name , libelle_depense.created_at
             FROM 
                libelle_depense , depense, serveur
            WHERE
                libelle_depense.server_id = serveur.id AND libelle_depense.depense_id = depense.id
            ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}



}



?>