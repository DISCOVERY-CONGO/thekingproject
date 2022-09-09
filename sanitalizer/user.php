<?php
use Models\User;

$user = new User;
if (isset($_POST['register'])) {
    
    $nom = htmlspecialchars(trim($_POST['name']));
    $prenom = htmlspecialchars(trim($_POST['secondName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $data = ['name'=>$nom,'secondName'=>$prenom,'email'=>$email,'password'=>$password];

    $user->register($data);
}