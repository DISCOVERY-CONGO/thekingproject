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
    }


}


?>