<?php
namespace Controllers;

use \Models\Rapport;
use \Repositorie\HomeRepositorie;
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
            $commands = $commande->new_commands();
                if($this->get("commandes")){
                     $data = ['tables'=>$table,'commandes'=>$commands];
                     $this->affichage->views("commands/precommandes",$data);               
                 } 

                if($this->get("newCommand/([0-9]?[0-9]?[0-9]|100)")){
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

                if ($this->get("detailCommande/([0-9]?[0-9]?[0-9]|100)")) {


                    
                    $tableau = $this->get_parameters();
                    $last = $tableau[array_key_last($tableau)];


                            $data = $commande->get_commandById($last);
                     
                            $this->affichage->views('Libelle/libelleDetail',$data);
                         
                      
                }

                if ($this->get("precommande/[0-9]")) {
                
                    $tableau = $this->get_parameters();
                     $last = $tableau[array_key_last($tableau)];
                    $data = ['tables'=>$table,'client_id'=>$last];

                    $this->affichage->views('precommande/create',$data);
                                    
                 }
                
                 if ($this->get("facture/([0-9]?[0-9]?[0-9]|100)")) {
                    $tableau = $this->get_parameters();
                    $id = $tableau[array_key_last($tableau)];
                    $data = $commande->facture($id);
                    $this->affichage->views('libelle/facture',$data);
                 }



        }

    // public function commandClient($clientId = null, $productId = null)
    //     {
    //         $commande = new Commande;
    //         return $commande->clients_command($clientId,$productId);
    //     }

    public function store_precommande($data){
            $commande = new Commande;
            $table = new \Models\Data_table;
            $commande->precommandeStore($data);
            $table->change_status($data);
            $commandes = $commande->all_commandes();
            //$this->affichage->views('commands/commands',$commandes);
            header('location:commandes');
        }

 public function store_command($data){
    $commande = new Commande;
    $produit = new Produit;
    $commande->store($data);
    $produit->updateProductQuantity($data['produit_id']);
  
    
        
 }

 public function confirm_commande($data){
    $structure = new \models\structure();
    $commande = new \Models\Commande;

    $table_id = $data['table_id'];
    $precommande_id = $data['precom_id'];
    $commande->confirmCommand($table_id);
    $precommande = $commande->precommande_status($precommande_id);
   $data = $commande->get_commandById($precommande_id);

   $repositorie = new HomeRepositorie();
   $commande = new Commande;
   $count_product = $repositorie->count_produit();
   $count_client = $repositorie->count_client();
 
   // $command = $commande->not_approved();
   $revenue = $commande->revenue();
   
 
   $data = [ 'count_product'=>$count_product,'revenue'=>$revenue];
   
   $this->affichage->views("index",$data);
    

 }

 public function commande_by_id($data){
    $commande = new \Models\Commande;
    $data = $commande->get_commandById($data);
 }

 public function status($data){
    $commande = new Commande;
    $commande->precommande_status($data);
    //$this->affichage->views('commands/commands',$commandes);
    header('location:/');
}


}


?>