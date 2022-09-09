<?php 

namespace Models;

use models\base;

class User extends Model{

protected $attributes=[
    "name", "secondName", "email", "password"
];
protected $database;
protected $connect;

public function __construct()
{
    $this->database = new base;
    $this->connect = $this->database->init_connection();
}

public function register($data){
    $nom = $data['name'];
    $prenom = $data['secondName'];
    $email = $data['email'];
    $password = $this->hash_password($data['password']);

    $sql = "INSERT INTO user (name,secondName,email,password) VALUES (?,?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom,$prenom,$email,$password]);
}



public function login($email,  $password){

       
    // $donnees = $this->data_model->query("SELECT * FROM user WHERE email='".$email."'");
    // if($donnees){
    //    if(password_verify($password, $donnees["password"])){
    //        $this->connect((object)$donnees);
    //    echo 'success';
    //    }else{
    //        header("HTTP/1.1 401 unhothorized");
    //        echo "echecs";
           
    //    }
       
    // }
   
       
   }

   protected function hash_password($password){
    return   password_hash($password, PASSWORD_DEFAULT);
   }


}




?>