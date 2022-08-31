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

    public function create($data){
  
    $this->attributes[count($this->attributes)] = "created_at";
    $this->attributes[count($this->attributes)] = "updated_at";
    // $this->attributes = array_merge(array("id"), $this->attributes);
    
    $data[count($data)]=date("Y-m-d");
    $data[count($data)]=date("Y-m-d");
    // $data = array_merge(array('NULL'), $data);
    //die($this->attributes);
    if(count($data)==count($this->attributes)){
        var_dump($this->attributes);
        var_dump($data);
        //var_dump($this->get_class_name());
        $this->db->insert($data, strtolower($this->get_class_name()), $this->attributes);
    }
    }
    protected function get_class_name(){

        return substr(get_class($this), 7, strlen(get_class($this))-1);

    }
    protected function read(){

    }

    protected function update(){

    }

    protected function delete(){

    }
  



}


?>