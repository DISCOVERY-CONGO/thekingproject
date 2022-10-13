<?php
namespace Controllers;

use Models\Mouvement_commande;

class ControllerStock extends BaseController{
    protected $model = "stock";

    
      // raport pour le stock
protected function route()
{
  $stock = new Mouvement_commande;
    if ($this->get("stock")) {
      
        $this->affichage->views("stock/stock");
    }
    if ($this->get("daily")) {
      $data = $stock->inpout_output();
     $this->affichage->views("stock/journalier",$data);
      }
      if ($this->get("weekly")) {
        $data = $stock->stock_hebdo();
        $this->affichage->views("stock/weekly",$data);
      }
      if ($this->get("monthly")) {
        $data = $stock->inpout_output();
        $this->affichage->views("stock/monthly",$data);
      }
}



}