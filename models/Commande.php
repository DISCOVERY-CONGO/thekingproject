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
    $command_id = $data['command_id'];
    $quantite = $data['quantite'];
    $produit_id = $data['produit_id'];

    $sql = "INSERT INTO commande (command_id,produit_id,quantite) VALUES (?,?,?)";
    $req = $this->connect->prepare($sql);
    $resultat = $req->execute([$command_id,$produit_id,$quantite]);
    if($resultat){
        return true;
    }
}

public function precommandeStore($data)
{
    
    $table = $data;
    $sql = "INSERT INTO precommande (table_id) VALUES (?)";
    $req = $this->connect->prepare($sql);
   $result =  $req->execute([$table]);
   if ($result) {
    return true;
   }
}



public function getCommandByProduct($product_id, $command_id)
{
       $this->req = $this->connect->query("SELECT * FROM commande WHERE produit_id = '$product_id' AND command_id = '$command_id' ");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
        
}

public function libelleCommand($command_id){
    $this->req = $this->connect->query("SELECT produit.*, commande.id as comId,commande.quantite, commande.command_id FROM produit, commande WHERE 
    produit.id = commande.produit_id AND  commande.command_id = '$command_id'");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
}

public function get_commandById($commandId){
    $this->req = $this->connect->query("SELECT  produit.*,data_table.name as tname,data_table.id, commande.id as comId,commande.quantite as qty, precommande.created_at FROM precommande, produit, commande,data_table WHERE 
    produit.id = commande.produit_id AND precommande.table_id = data_table.id AND precommande.table_id = '$commandId'");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
}

public function all_commandes(){
    $this->req = $this->connect->query("SELECT
     data_table.name as tname, precommande.id as pId, precommande.created_at, data_table.id as tId
     FROM data_table, precommande 
     WHERE data_table.id = precommande.table_id");
          $result = $this->req->fetchAll();
          if($result != null){
              return $result;
          }
}


// public function not_approved(){
// //    $this->req = $this->connect->query("SELECT DISTINCT precommande.nom, data_table.name as tname,data_table.id, precommande.confirm, precommande.id as comId, client.nom as client FROM precommande,data_table,client WHERE 
// //   precommande.table_id = data_table.id AND precommande.client_id = client.id AND precommande.confirm = 0 ");
// //         $result = $this->req->fetchAll();
// //         if($result != null){
// //             return $result;
// //         }
// $this->req = $this->connect->query("SELECT DISTINCT precommande.nom, data_table.name as tname,data_table.id, precommande.confirm, precommande.id as comId, client.nom as client FROM precommande,data_table,client WHERE 
// precommande.table_id = data_table.id AND precommande.client_id = client.id AND precommande.confirm = 0 ORDER BY precommande.id DESC ");
//       $result = $this->req->fetchAll();
//       if($result != null){
//           return $result;
//       }
// }

public function updateCommandQuantity($quantity, $command_id)
{
    $this->req = $this->connect->prepare("UPDATE commande SET  quantite = ? WHERE id= ?");
    $this->req->execute([$quantity,$command_id]);
}

public function confirmCommand($command_id)
{
    $this->req = $this->connect->prepare("UPDATE data_table SET  status = 0 WHERE id= ?");
    $this->req->execute([$command_id]);
    
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

public function revenue()
{
    $this->req = $this->connect->query("SELECT produit.prix as prix, commande.quantite as quantite FROM produit,commande WHERE 
    commande.produit_id = produit.id");
          $result = $this->req->fetchAll();
          if($result != null){
              return $result;
          }
}




}




?>