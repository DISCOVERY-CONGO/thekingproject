<?php
namespace Repositorie;

use \models\base;
use \models\Client;
use \models\Depense;
use \models\Produit;

class HomeRepositorie {
    protected $client;
    protected $depense;
    protected $produit;

    public function __construct()
    {
        $this->client = new Client();
        $this->depense = new Depense();
        $this->produit = new Produit();
    }

    public  function count_client(){
        return $this->client->count();
    }
    
    public static function revenue(){

    }

    public static function depense(){

    }

    public  function count_produit(){
        return $this->produit->count();
    }

}