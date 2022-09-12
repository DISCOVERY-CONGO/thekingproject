<?php 
use \Models\User;

$structure = new \models\structure();
$user = new User;

if (isset($_POST['register'])) {
    $nom = htmlspecialchars(trim($_POST['name']));
    $prenom = htmlspecialchars(trim($_POST['secondName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $data = ['name'=>$nom,'secondName'=>$prenom,'email'=>$email,'password'=>$password];
    $user->register($data);
    header("location:".$structure->redirect['domaine']."/login");
}


if (isset($_POST['login'])) {
    
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $data = ['email'=>$email,'password'=>$password];
    $user->login($data);
    header("location:".$structure->redirect['domaine']);

}