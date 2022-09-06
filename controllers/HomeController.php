<?php
namespace Controllers;

class HomeController extends BaseController{
    protected $model = "produit";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
     return $this->affichage->views("index", $data);
    }

    protected function one($data){
        return $this->affichage->views("index", $data);
       }
   


}

}
?>