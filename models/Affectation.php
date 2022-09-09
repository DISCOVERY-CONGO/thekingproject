<?php 

namespace Models;


class Affectation extends Model{

protected $attributes=[
    "id_server", "id_table" 
];




public function get_affectation_by_server($id_server){
return $this->db->requetteAll("SELECT * FROM affectation WHERE id_server=".$id_server."");
}

}




?>