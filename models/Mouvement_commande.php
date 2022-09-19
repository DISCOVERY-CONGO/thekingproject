<?php 

namespace Models;


class Mouvement_commande extends Model{

protected $attributes=[
    "produit", "quantite", "prix"
];
protected $database;
protected $connect;


public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function today_command(){
    $this->req = $this->connect->query("SELECT 
    commande.quantite, precommande.id as pId, precommande.created_at, produit.prix as prix, produit.nom as pname, data_table.name as tname 
    FROM commande, precommande , produit, data_table
    WHERE commande.created_at = CURRENT_DATE 
    AND commande.command_id = precommande.id 
    AND commande.produit_id = produit.id  
    AND precommande.table_id = data_table.id
    ");
          $result = $this->req->fetchAll();
          if($result != null){
              return $result;
          }
}

public function month_command(){
    $sql = "SELECT 
    commande.created_at,commande.quantite, precommande.id as pId, precommande.created_at, produit.prix as prix, produit.nom as pname, data_table.name as tname 
    FROM commande, precommande , produit, data_table
    WHERE commande.command_id = precommande.id 
    AND commande.produit_id = produit.id  
    AND precommande.table_id = data_table.id
   AND month(commande.created_at) = month(CURRENT_DATE)-1 ";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    if($result != null){
        return $result;
    }

}


public function week_command(){
    $sql = "SELECT 
    commande.created_at,commande.quantite, precommande.id as pId, precommande.created_at, produit.prix as prix, produit.nom as pname, data_table.name as tname 
    FROM commande, precommande , produit, data_table
    WHERE commande.command_id = precommande.id 
    AND commande.produit_id = produit.id  
    AND precommande.table_id = data_table.id
   AND day(commande.created_at) = day(CURRENT_DATE)-7 ";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    if($result != null){
        return $result;
    }




}


}

?>