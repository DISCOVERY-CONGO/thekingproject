<?php 
namespace controllers;
use \models\Depense;
class ControllerDepense extends BaseController{
    protected $model = "depense";
    protected function middleware(){
        return false;
    }
    protected function route(){
       if($this->get('depenses')){
        $depense = new Depense;
        $data = $depense->all_depenses();
        $this->affichage->views("depense/depenses",$data);
       }
       if ($this->get('newDepense')) {
        $this->affichage->views("depense/createDepense");
       }
    }
}



?>