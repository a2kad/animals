<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: ../controllers/controller-login.php');
    exit;
}else{

require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Gerer.php";

$regexString = '/^[a-zA-Z]+$/';
$regexWeight = '/^[0-9.]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/';
$showForm = true;
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"])) {
        $name = htmlspecialchars($_POST['name']);

        if (empty($name)) {
            $error["name"] = "Champs obligatoire";
        } else if (!preg_match($regexString, $name)) {
            $error["name"] = "Mauvais format du nom";
        }
    }
    if (isset($_POST['submit']) && count($error) == 0) {
        $id = $_POST['id'];
        $date_of_birth = htmlspecialchars($_POST['date_of_birth']);
        $tatoo = htmlspecialchars($_POST['tatoo']);
        $chip = htmlspecialchars($_POST['chip']);
        
        
        $id_color = htmlspecialchars($_POST['id_color']);
        $id_type = htmlspecialchars($_POST['id_type']);
        $id_sex = htmlspecialchars($_POST['sex']);
        $id_race = htmlspecialchars($_POST['id_race']);

    }

    if (isset($_POST["weight"])) {
        $weight = htmlspecialchars($_POST['weight']);

        if (empty($weight)) {
            $error["weight"] = "Champs obligatoire";
        } else if (!preg_match($regexWeight, $weight)) {
            $error["weight"] = "Mauvais format poids";
        }
    }

    if (count($error) == 0) {
        $showForm = false;
        $result_modif = Gerer::modifierAnimal($id, $date_of_birth, $tatoo, $chip, $name, $weight, $id_color, $id_type, $id_sex, $id_race);
        if ($result_modif) {
            $message = "L'animal a bien été modifié";
        } else {
            $message = "L'animal n'a pas pu être modifié";
        }
    }
}
include '../views/modifier.php';
}