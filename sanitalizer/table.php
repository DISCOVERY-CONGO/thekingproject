<?php

use \Controllers\ControllerData_table;
use Models\Data_table;

if (isset($_POST['table'])) {
    if ($_POST['nom']) {
        $nom = htmlspecialchars(trim($_POST['nom']));
        $places = htmlspecialchars(trim($_POST['places']));

        $table = new ControllerData_table();
        $data = array('nom'=>$nom,'places'=>$places);
        $table->insertion($data);

    }
}