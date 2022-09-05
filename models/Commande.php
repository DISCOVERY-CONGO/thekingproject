<?php 

namespace Models;


class Commande extends Model{

protected $attributes=[
    "serveur", "client", "table_id", "numcommande"
];
protected $parent = ["data_table"=>"table_id"];


public function today(){
    $data =  $this->db->requetteAll("SELECT * FROM commande WHERE created_at='".date("Y-m-d")."'");
    $donnees = [];
    foreach ($data as $key => $value) {
        $donnees[count($donnees)] =   new Commande($value);
    }
    return $donnees;
}



}




?>