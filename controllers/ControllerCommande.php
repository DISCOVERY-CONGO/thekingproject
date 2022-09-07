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

            if($this->get("commandes")){
                $this->affichage->views("commands/commands");
            } 

            if($this->get("newCommand/[0-9]")){

                $tableau = $this->get_parameters();
                $last = $tableau[array_key_last($tableau)];
                
                
                $produit = $produits->all_products();
                
                $table = $tables->all_tables();
                $client_command = $this->commandClient($last);
                
                        $data = [
                            'client_id'=>$last,
                            'produits'=>$produit,
                            'tables'=>$table,
                            'commandes'=>$client_command
                        ];
                
                $this->affichage->views('commands/createCommand',$data);
            }

            if ($this->get("confirmCommand/[0-9]")) {
                $tableau = $this->get_parameters();
                $last = $tableau[array_key_last($tableau)];
                var_dump($last);

            }


        }

        public function commandClient($clientId = null, $productId = null)
        {
            $commande = new Commande;
            return $commande->clients_command($clientId,$productId);
        }

}


?>