<?php 

namespace Models;

use models\base;

class User extends Model{

protected $attributes=[
    "name", "secondName", "email", "password"
];
<<<<<<< HEAD
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
=======
protected $databse;
protected $connect;
>>>>>>> 1af083c54d12d97af626be14b815b16835c03bc8

public function __construct()
{
    $this->databse = new base;
    $this->connect = $this->databse->init_connection();
}

public function register($data){
    $nom = $data['name'];
    $prenom = $data['secondName'];
    $email = $data['email'];
    $password = $this->hash_passord($data['password']);

    $sql = "INSERT INTO user (name,secondName,email,password) VALUES (?,?,?,?)";
    $req = $this->connect->prepare($sql);
    $req->execute([$nom,$prenom,$email,$password]);
}

public function login($data){
    $email = $data['email'];
    $password =$data['password'];

   $req = $this->connect->query("SELECT * FROM user WHERE email='".$email."'");
   $result = $req->fetchAll();
   if($result){
        if(password_verify($password,$result[0]['password'])){
            $_SESSION['role'] = $result[0]['role'];
        }
    
   }
    
}

protected function hash_passord($password){
    return password_hash($password, PASSWORD_DEFAULT);
}

}




?>