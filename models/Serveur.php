<?php 

namespace Models;


class Serveur extends Model{
    protected $child = ["affectation"=>"id_server"];

protected $attributes=[
    "nom", 
    "post_nom", 
    "sexe"
];


}




?>