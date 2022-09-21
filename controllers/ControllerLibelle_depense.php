<?php
namespace Controllers;

use Models\Libelle_depense;

class ControllerLibelle_depense extends BaseController{
    protected $model = "libelle_depense";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("Libelle/libelles", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("Libelle/libelleDetail", $data);
          }
          protected function route(){
            if ($this->get("libelles")){
                $libelles = new Libelle_depense;
                $data = $libelles->libelles_depense();
             $this->affichage->views('Libelle/libelles',$data);
            }
             if($this->get("newLibelle")){

                $depenses = new \models\Depense;
                $server = new \models\Server;
                $data = [
                        'servers'=>$server->all_servers(),
                        'depenses'=>$depenses->all_depenses()

                ];
                
                 $this->affichage->views('Libelle/createLibelle',$data);
             }
             
         }

        public function store_libelleDepense($data)
        {
            $libelle = new \models\Libelle_depense;
            $libelle->store($data);
        }

}


?>