<?php
require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Ajouter.php";

$regexString = '/^[a-zA-Z]+$/';
$regexWeight = '/^[0-9.]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/';
$showForm = true;
$insert = false;
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["modify"])) {
        echo "ok";
    }
    if (isset($_POST["name"])) {
        $name = $_POST["name"];

        if (empty($name)) {
            $error["name"] = "Champs obligatoire";
        } else if (!preg_match($regexString, $name)) {
            $error["name"] = "Mauvais format du nom";
        }
    }

    if (!isset($_POST["animaltype"])) {
        $error["animaltype"] = "Champs obligatoire";
    }

    if (isset($_POST["animaltype"])) {
        $type = $_POST["animaltype"];
        if ($_POST["animaltype"] == "1") {
            $race = $_POST["animalracecat"];
            if (!isset($_POST["animalracecat"])) {
                $error["animalracecat"] = "Champs obligatoire";
            } else if ($_POST["animalracecat"] != "1" && $_POST["animalracecat"] != "2" && $_POST["animalracecat"] != "3" && $_POST["animalracecat"] != "4") {
                $error["animalracecat"] = "Veuillez selectionner parmi la liste chat";
            } else {
                $race = $_POST["animalracecat"];
            }
        } else if ($_POST["animaltype"] == "2") {
            if (!isset($_POST["animalracedog"])) {
                $error["animalracedog"] = "Champs obligatoire";
            } else if ($_POST["animalracedog"] != "5" && $_POST["animalracedog"] != "6" && $_POST["animalracedog"] != "7" && $_POST["animalracedog"] != "8") {
                $error["animalracedog"] = "Veuillez selectionner parmi la liste chien";
            } else {
                $race = $_POST["animalracedog"];
            }
        }
    }


    if (!isset($_POST["sex"])) {
        $error["sex"] = "Champs obligatoire";
    } else {
        if ($_POST["sex"] == "1" && $_POST["sex"] == "2") {
            $error["sex"] = "Mauvais format sex";
        } else {
            $sex = $_POST["sex"];
        }
    }

    if (isset($_POST["animalarrival"])) {
        $date = $_POST["animalarrival"];
        if (empty($date)) {
            $error["animalarrival"] = "Champs obligatoire";
        } else if (!preg_match($regexDate, $date)) {
            $error["name"] = "Mauvais format date";
        }
    }

    if (isset($_POST["weight"])) {
        $weight = $_POST["weight"];

        if (empty($weight)) {
            $error["weight"] = "Champs obligatoire";
        } else if (!preg_match($regexWeight, $weight)) {
            $error["weight"] = "Mauvais format poids";
        }
    }

    if (!isset($_POST["tatoo"])) {
        $error["tatoo"] = "Champs obligatoire";
    } else {
        $tatoo = $_POST["tatoo"];
    }

    if (!isset($_POST["color"])) {
        $error["color"] = "Champs obligatoire";
    } else {
        $color = $_POST["color"];
    }

    if (!isset($_POST["chip"])) {
        $error["chip"] = "Champs obligatoire";
    } else {
        $chip = $_POST["chip"];
    }

    if (!isset($_POST["cgu"])) {
        $error["cgu"] = "Champs obligatoire";
    }

    if (count($error) == 0) {
        $showForm = false;
        $message = "Êtes-vous sûr de vouloir ajouter cet animal ?";
        if (isset($_POST["add"])) {
            $insert = true;
            $result = Ajouter::addAnimal($name, $type, $race, $sex, $date, $weight, $tatoo, $color, $chip);
            if ($result) {
                echo "L'animal a bien été ajouté";
            } else {
                echo "L'animal n'a pas pu être ajouté";
            }
        }
    }
}
include '../views/ajouter.php';
