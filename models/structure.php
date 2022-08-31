<?php   
namespace models;
class structure{
	public $architecture;
	public $external_structure;

    public function __construct($structure=array()){
    $this->architecture = $structure;
    }

 
    
		public  $definition = array(
     "domaine"=>"http://localhost/thekingproject",
     "db_name"=>"kingpro",
     "hote"=>"localhost",
     "login"=>"root",
     "pass"=>""
    );
    public static function asset($data){
        return $this->definition['domaine']."public/".$data;
    }



    
        public static $donnees =  array(
      "domaine"=>"http://localhost/kingpro",
     "db_name"=>"kingpro",
     "hote"=>"localhost",
     "login"=>"root",
     "pass"=>""
    );
    
    public $definition_page = array(
    	"encodage"=>"utf-8", 
        "domaine"=>"http://localhost/kingpro", 
       );
	

public static function data(){
    return [
        "domaine"=>"http://localhost/kingpro",
     "db_name"=>"kingpro",
     "hote"=>"localhost",
     "login"=>"root",
     "pass"=>""
    ];
}
}

?>