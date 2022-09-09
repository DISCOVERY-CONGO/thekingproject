<?php
$structure = new \models\structure;
$depense = new \models\Depense;
if (isset($_POST['save'])) {
   
    $nom = htmlspecialchars(trim($_POST['name']));

    $depense->store($nom);
    header("location:".$structure->definition['domaine']."/depenses");
    
}