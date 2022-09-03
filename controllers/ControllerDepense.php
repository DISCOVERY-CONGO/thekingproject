<?php 
namespace controllers;

class ControllerDepense extends BaseController{
    protected $model = "depense";
    protected function middleware(){
        return false;
    }
    protected function route(){
       if($this->get('depenses')){
        $this->affichage->views("depense/depenses");
       }
       if ($this->get('newDepense')) {
        $this->affichage->views("depense/createDepense");
       }
    }
}



?>