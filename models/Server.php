<?php 

namespace Models;
use \models\base;

class Server extends Model{

    protected $connect;
    protected $database;

protected $attributes=[
    "nom", 
    "post_nom",
    "phone", 
    "sexe"
];

public function __construct()
{
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}


public function inserer($data){
    $nom = $data['nom'];
    $post_post = $data['post_nom'];
    $phone = $data['phone'];
    $sexe = $data['sexe'];

    $sql = "INSERT INTO serveur (nom,post_nom,phone,sexe) VALUES (?,?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom,$post_post,$phone,$sexe]);
}

public function all_servers(){
    $sql = "SELECT * FROM serveur ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}

}




?>