<?php
namespace Controllers;

class ControllerUser extends BaseController{
    protected $model = "user";
    //implementez les methodes all et one pour afficher les données 
   
    public function login($email,  $password){

       
     $donnees = $this->data_model->query("SELECT * FROM user WHERE email='".$email."'");
     if($donnees){
        if(password_verify($password, $donnees["password"])){
            $this->connect((object)$donnees);
        echo 'success';
        }else{
            header("HTTP/1.1 401 unhothorized");
            echo "echecs";
            
        }
        
     }
    
        
    }
    protected function all($data){
        return $this->affichage->views("index", $data);
    }

    protected function route(){
        if($this->get("login")){
           // header("HTTP/1.1 404 Not Found");
            if($this->is_post()){
                if(in_array("password", array_keys($this->request["post"])) && in_array("email", array_keys($this->request["post"]))){
                    $this->login($this->request["post"]["email"], $this->request["post"]["password"]);
                }else{
                    echo json_encode($this->request["post"]);
                    //header("HTTP/1.1 404 Not Found");
                }
            }
        }
    }



}


?>