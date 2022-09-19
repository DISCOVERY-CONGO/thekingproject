<?php
namespace Controllers;
use \models\Mouvement_commande;
class ControllerMouvement_commande extends BaseController{
    protected $model = "mouvement_commande";
    //implementez les methodes all et one pour afficher les données 

    protected function route()
    {
        $rapport = new Mouvement_commande;
      if ($this->get("rapports")) {
        $this->affichage->views("rapport/rapports");
      }
      if ($this->get("journalier")) {
        $data = $rapport->today_command();
      
        $this->affichage->views("rapport/journalier",$data);
      }

      if ($this->get("mensuel")) {
        $data = $rapport->month_command();
      
        $this->affichage->views("rapport/mensuel",$data);
      }
      if ($this->get("hebdo")) {
        $data = $rapport->week_command();
      
        $this->affichage->views("rapport/hebdo",$data);
      }
    }


}


?>