<?php 

namespace Models;

use \models\base;
class Stock extends Model{

    protected $database;
    protected $connect;

protected $attributes=[
];

public function __construct()
{
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}


}