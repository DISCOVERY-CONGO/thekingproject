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
    $result = $user->register($data);
    

    if($result){
        header("location:".$structure->redirect['domaine']."/login");
    }
    else{
        $_SESSION['error'] = "veuillez remplir tous les champs";
        header("location:".$structure->redirect['domaine']."/register");
    }
    
}


if (isset($_POST['login'])) {
    
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $data = ['email'=>$email,'password'=>$password];
    $result = $user->login($data);
    if($result){
        header("location:".$structure->redirect['domaine']);
    }
    else{
        $_SESSION['erreur'] = "email ou mot de passe érronés";
        header("location:".$structure->redirect['domaine']."/login");
    }
    

}