<?php 

namespace Models;
use \models\base;

class Commande extends Model{

protected $attributes=[
    "produit", "client", "table_id", "numcommande"
];

public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}
public function store($data)
{
    
    $quantite = $data['quantite'];
    $produit = $data['produit_id'];
    $client = $data['client_id'];
    $table = $data['table_id'];
    $sql = "INSERT INTO commande (quantite,produit_id,client,table_id) VALUES (?,?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$quantite,$produit,$client,$table]);
}



public function getCommandByProduct($product_id, $client_id)
{
       $this->req = $this->connect->query("SELECT * FROM commande WHERE produit_id = '$product_id' AND client = '$client_id' ");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
        
}

public function clients_command($client_id){
    $this->req = $this->connect->query("SELECT produit.*,data_table.name as tname,data_table.id, commande.id as comId,commande.quantite FROM produit, commande,data_table WHERE 
    produit.id = commande.produit_id AND commande.table_id = data_table.id AND commande.client = '$client_id'");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
}

public function not_approved(){
    $this->req = $this->connect->query("SELECT produit.*,data_table.name as tname,data_table.id, precommande.confirm, precommande.id as comId,commande.quantite FROM precommande, produit, commande,data_table WHERE 
    produit.id = commande.produit_id AND precommande.table_id = data_table.id AND precommande.confirm = 0 ");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
}

public function updateCommandQuantity($quantity, $command_id)
{
    $this->req = $this->connect->prepare("UPDATE commande SET  quantite = ? WHERE id= ?");
    $this->req->execute([$quantity,$command_id]);
}

public function deleteCommandItem($command_id)
{
    $this->req = $this->connect->prepare("DELETE FROM commande WHERE id = ?");
    $this->req->execute([$command_id]);

}

public function emptyCommand($client_id)
{
    $this->req = $this->connect->prepare("DELETE FROM commande WHERE client = ?");
    $this->req->execute([$client_id]);
}


}




?>