<?php
session_start();
require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Gerer.php";

if (isset($_GET['info'])){
    $id = $_GET['info'];
    $result_info = Gerer::getAnimal($id);
    echo 'Info OK';
}

include '../views/info.php';