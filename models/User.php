<?php 

namespace Models;

use models\base;

class User extends Model{

protected $attributes=[
    "name", "secondName", "email", "password"
];
protected $databse;
protected $connect;

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
    return true;
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
   return true;
    
}

protected function hash_passord($password){
    return password_hash($password, PASSWORD_DEFAULT);
}

public function users()
{
    $sql = "SELECT * FROM user ORDER BY id DESC";
    $this->req = $this->connect->query($sql);
    $result = $this->req->fetchAll();
    return $result;
}

}




?>