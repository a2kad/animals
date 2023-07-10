<?php
require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Gerer.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $date_of_birth = htmlspecialchars($_POST['date_of_birth']);
    $tatoo = htmlspecialchars($_POST['tatoo']);
    $chip = htmlspecialchars($_POST['chip']);
    $name = htmlspecialchars($_POST['name']);
    $weight = htmlspecialchars($_POST['weight']);
    $id_color = htmlspecialchars($_POST['id_color']);
    $id_type = htmlspecialchars($_POST['id_type']);
    $id_sex = htmlspecialchars($_POST['sex']);
    $id_race = htmlspecialchars($_POST['id_race']);

    $result_modif = Gerer::modifierAnimal($id, $date_of_birth, $tatoo, $chip, $name, $weight, $id_color, $id_type, $id_sex, $id_race);
    if($result_modif){
        

        echo `
            Modif OK
            `;

    }else{
        echo 'Modif Error';
    }
}



include '../views/modifier.php';

