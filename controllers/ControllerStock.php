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
      $data = $stock->inpout_output();
        $this->affichage->views("stock/stock",$data);
    }
    if ($this->get("stockmensuel")) {

      }
      if ($this->get("stockhebdo")) {

      }
}



}