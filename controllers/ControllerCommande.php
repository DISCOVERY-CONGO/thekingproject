<?php
namespace Controllers;

use Models\Commande;
use \models\Produit;
use \Models\Data_table;

class ControllerCommande extends BaseController{
    protected $model = "commande";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("index", $data);
    }
   
    protected function one($data){
           return $this->affichage->views("index", $data);
    }

    protected function route(){

        $tables = new Data_table;
        $produits = new Produit();
        $commande = new Commande;
            $table = $tables->all_tables();

                if($this->get("commandes")){

                        $data = $commande->all_commandes();
                        $this->affichage->views("commands/commands",$data);
                 } 

                if($this->get("newCommand/[0-9]")){

                        $tableau = $this->get_parameters();
                        $last = $tableau[array_key_last($tableau)];
                    
                        $produit = $produits->all_products();
                        $libelle = $commande->libelleCommand($last);
               
                        $data = [
                            'command_id'=>$last,
                            'produits'=>$produit,
                            'commandes'=>$libelle
                        ];
                
                     $this->affichage->views('commands/createCommand',$data);
                }

                if ($this->get("confirmCommand/[0-9]")) {
                    
                    $tableau = $this->get_parameters();
                    $last = $tableau[array_key_last($tableau)];
                     
                    $confirmation = $commande->confirmCommand($last);
                      

                            $data = $commande->get_commandById($last);
                                
                            $this->affichage->views('Libelle/libelleDetail',$data);
                         
                      
                }

                if ($this->get("precommande/([0-9]?[0-1]|100)")) {
                
                    $tableau = $this->get_parameters();
                     $last = $tableau[array_key_last($tableau)];
                    $data = ['tables'=>$table,'client_id'=>$last];

                    $this->affichage->views('precommande/create',$data);
                                    
                 }


        }

    // public function commandClient($clientId = null, $productId = null)
    //     {
    //         $commande = new Commande;
    //         return $commande->clients_command($clientId,$productId);
    //     }

    public function store_precommande($data){
            $commande = new Commande;
            $commande->precommandeStore($data);
           
        }

}


?>