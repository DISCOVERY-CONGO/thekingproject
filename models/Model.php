<?php    
namespace models;

class model{
    protected $name;
    protected $id;
    protected $created_at;
    protected $updated_at;
    protected $attributes = [];
    protected $db;
    public function __construct(){
        $this->db  = new base();
    }

    public function create($data){ //crée une nouvelle donnée 
  
    $this->attributes[count($this->attributes)] = "created_at";
    $this->attributes[count($this->attributes)] = "updated_at";
   
    
    $data['created_at']=date("Y-m-d");
    $data['updated_at']=date("Y-m-d");
    $donnees = [];
    
   
    if(count($data)==count($this->attributes)){
       
        foreach ($this->attributes as $key => $value) {
            if(!in_array($value, array_keys($donnees))){
                $donnees[$key]=$data[$value];
            }
        }
        //var_dump(transform_array_assoc_to_index($donnees));
       $this->db->insert(transform_array_assoc_to_index($donnees), strtolower($this->get_class_name()), $this->attributes);
    }
    }

    protected function get_class_name(){

        return substr(get_class($this), 7, strlen(get_class($this))-1);

    }
    public function read(){ //retourne la liste des enregistrement de ce modele
        return $this->db->requetteAll("SELECT * FROM ".strtolower($this->get_class_name()));

    }
    public function all(){
        return $this->read();
    }
    public function first(){ //retourne le premier element dans  la liste des enregistrement de ce modele
        return $this->db->requette("SELECT * FROM ".strtolower($this->get_class_name()));   
    }
    public function find($id){ //retourne le premier element dans  la liste des enregistrement de ce modele ayant l'id correspondant
        return $this->db->requette("SELECT * FROM ".strtolower($this->get_class_name())." WHERE id=".$id);
    }

    public function update($data, $id){
        $old_data = $this->find($id);
        $donnees = [];
        $data['created_at']=date("Y-m-d");
  if($old_data){
        $this->attributes[count($this->attributes)] = "updated_at";
        
        foreach ($this->attributes as $key => $value) {
            if(!in_array($value, array_keys($data))){
                $donnees[count($donnees)] = $old_data[$value];
            }else{
                $donnees[count($donnees)]= $data[$value];
            }
        }
       
        
        

       
        if(count($donnees)==count($this->attributes)){
             //var_dump($this->attributes);
            $this->db->update(strtolower($this->get_class_name()), $this->attributes, $donnees, "id=".$id);
        }
    }
    }

    public function delete($id){
        $this->db->supprimer(strtolower($this->get_class_name()), "id=".$id);
    }
  



}


?>