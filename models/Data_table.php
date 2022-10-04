<?php 

namespace Models;

use \models\base;

class Data_table extends Model{
    protected $connect;
    protected $database;
    protected $nom;
    protected $places;

    protected $attributes = ["name"];

    public function __construct(){
        $this->database = new base();
        $this->connect = $this->database->init_connection();
    }

    public function insert($data){
        $this->nom = $data['nom'];
        $this->places = $data['places'];

        $sql = "INSERT INTO data_table  (name,places)  VALUES (?,?)";
        $req = $this->connect->prepare($sql);
        $req->execute([$this->nom,$this->places]);
        
    }

    public function all_tables(){
        $sql = "SELECT data_table.name as tname, data_table.id as tId, data_table.places, data_table.status 
                    FROM data_table";
        $req = $this->connect->query($sql);
        $result = $req->fetchAll();
    return $result;
    }

    public function change_status($data)
    {
        $req = $this->connect->prepare("UPDATE data_table SET  status = true WHERE id= ?");
        $req->execute([$data]);
        
    }

    public function non_affecter()
    {
        $sql = "SELECT data_table.name as tname, data_table.id as tId 
        FROM data_table, affectation 
        WHERE  data_table.id != affectation.table_id ";
        $req = $this->connect->query($sql);
        $result = $req->fetchAll();
    return $result;
    }

}




?>