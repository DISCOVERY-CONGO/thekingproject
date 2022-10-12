<?php
$structure = new \models\structure;
$depense = new \models\Depense;
if (isset($_POST['save'])) {
   
    $nom = htmlspecialchars(trim($_POST['name']));
    $username = htmlspecialchars(trim($_POST['username']));
    $montant = htmlspecialchars(trim($_POST['montant']));
        $data = ['nom'=>$nom,'username'=>$username,'montant'=>$montant];

    $depense->store($data);
    
}