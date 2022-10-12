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
       $this->req = $this->connect->query("SELECT * FROM commande 
                        WHERE produit_id = '$product_id' AND command_id = '$command_id' ");
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
    $this->req = $this->connect->query("SELECT commande.quantite as qty, produit.nom, produit.prix, precommande.created_at, data_table.name as tname, precommande.id as pId 
                                            FROM precommande,commande,produit,data_table  
                                            WHERE commande.command_id = precommande.id 
                                            AND precommande.id = '$commandId' 
                                            AND precommande.created_at = CURRENT_DATE 
                                            AND commande.produit_id = produit.id 
                                            AND data_table.id = precommande.table_id");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
}

public function all_commandes(){
    $this->req = $this->connect->query("SELECT
                            precommande.*,data_table.name as tname, data_table.status, data_table.id as tId
                        FROM data_table, precommande 
                        WHERE data_table.id = precommande.table_id 
                        AND data_table.status = 1 
                        AND precommande.status = 0 
                        AND precommande.created_at = CURRENT_DATE");
          $result = $this->req->fetchAll();
          if($result != null){
              return $result;
          }
}

public function new_commands(){

$this->req = $this->connect->query("SELECT DISTINCT  
                        data_table.name as tname,data_table.id as tId, precommande.status, precommande.id
                    FROM precommande,data_table 
                    WHERE precommande.table_id = data_table.id 
                    AND precommande.status = 0 
                    ORDER BY precommande.id DESC ");
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

public function confirmCommand($table_id)
{
    $this->req = $this->connect->prepare("UPDATE data_table SET  status = 0 WHERE id= ?");
    $this->req->execute([$table_id]);
    
}
public function precommande_status($id)
{
    $this->req = $this->connect->prepare("UPDATE precommande SET  status = 1 WHERE id= ?");
    $this->req->execute([$id]);
    
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
    $this->req = $this->connect->query("SELECT produit.prix as prix, commande.quantite as quantite 
                                FROM produit,commande WHERE 
    commande.produit_id = produit.id");
          $result = $this->req->fetchAll();
          if($result != null){
              return $result;
          }
}


public function facture($commandId){
    $this->req = $this->connect->query("SELECT commande.quantite as qty, produit.nom, produit.prix, precommande.created_at, data_table.name as tname, precommande.id as pId 
                                            FROM precommande,commande,produit,data_table  
                                            WHERE commande.command_id = precommande.id 
                                            AND precommande.id = '$commandId' 
                                            AND commande.produit_id = produit.id 
                                            AND data_table.id = precommande.table_id");
        $result = $this->req->fetchAll();
        if($result != null){
            return $result;
        }
}

}




?>