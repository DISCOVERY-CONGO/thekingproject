<<<<<<< HEAD
<?php
use Models\User;

$user = new User;
if (isset($_POST['register'])) {
    
=======
<?php 
use \Models\User;

$structure = new \models\structure();
$user = new User;

if (isset($_POST['register'])) {
>>>>>>> 1af083c54d12d97af626be14b815b16835c03bc8
    $nom = htmlspecialchars(trim($_POST['name']));
    $prenom = htmlspecialchars(trim($_POST['secondName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
<<<<<<< HEAD
    $data = ['name'=>$nom,'secondName'=>$prenom,'email'=>$email,'password'=>$password];

    $user->register($data);
=======

    $data = ['name'=>$nom,'secondName'=>$prenom,'email'=>$email,'password'=>$password];
    $user->register($data);
}


if (isset($_POST['login'])) {
    
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $data = ['email'=>$email,'password'=>$password];
    $user->login($data);
    header("location:".$structure->redirect['domaine']);

>>>>>>> 1af083c54d12d97af626be14b815b16835c03bc8
}