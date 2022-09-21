<?php 

namespace Models;


class Mouvement_commande extends Model{
    protected $database;
    protected $connect;
protected $attributes = ["produit", "quantite", "prix"];

public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function today_command(){
    $this->req = $this->connect->query("SELECT DISTINCT nom, produit.id, prix, 
	(SELECT 
            SUM(commande.quantite)  
            FROM commande 
            WHERE commande.produit_id = produit.id 	AND commande.created_at = CURRENT_DATE) 
            AS qty 
    FROM produit,commande
    WHERE commande.created_at = CURRENT_DATE AND  commande.produit_id = produit.id 
    GROUP BY produit.nom,commande.produit_id");
        $result = $this->req->fetchAll();
          if($result != null){
              return $result;
          }
}

public function month_command(){
    $sql = "SELECT DISTINCT nom, produit.id, prix, 
	            (SELECT SUM(commande.quantite) 
                    FROM commande 
     	            WHERE commande.produit_id = produit.id 	
                    AND month(commande.created_at) = month(CURRENT_DATE)-1 ) 
                    AS qty 
            FROM produit,commande
            WHERE commande.produit_id = produit.id 
            AND month(commande.created_at) = month(CURRENT_DATE)-1  
            GROUP BY produit.nom,commande.produit_id";

                $this->req = $this->connect->query($sql);
                $result = $this->req->fetchAll();
                     if($result != null){
                         return $result;
                     }
}


public function week_command(){
        $sql = "SELECT DISTINCT nom, produit.id, prix, 
	        (SELECT SUM(commande.quantite) 
     	        FROM commande 
     	        WHERE commande.produit_id = produit.id 	AND day(commande.created_at) = day(CURRENT_DATE)-7) 
                AS qty 
            FROM produit,commande
            WHERE commande.produit_id = produit.id 
            AND day(commande.created_at) = day(CURRENT_DATE)-7 
            GROUP BY produit.nom,commande.produit_id";

            $this->req = $this->connect->query($sql);
            $result = $this->req->fetchAll();
                if($result != null){
                    return $result;
                }
}

public function inpout_output(){
    $sql = "SELECT produit.nom,
	            (SELECT SUM(commande.quantite) 
     	            FROM commande 
     	            WHERE commande.produit_id = produit.id 
                    AND commande.created_at = CURRENT_DATE) 
                    AS qty_commande, produit.quantite as qty_total, -commande.quantite + produit.quantite as solde
                FROM produit,commande 
                WHERE  commande.produit_id = produit.id 
                AND commande.created_at = CURRENT_DATE 
                AND produit.created_at = CURRENT_DATE 
                GROUP BY produit.nom ";
                    $this->req = $this->connect->query($sql);
                    $result = $this->req->fetchAll();
                        if($result != null){
                            return $result;
                        }
    }

}

?>