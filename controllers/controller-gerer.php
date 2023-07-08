<?php
require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Gerer.php";
include '../views/gerer.php';
if (isset($_GET['del'])){
    $id = $_GET['del'];
    $result = Gerer::delAnimal($id);
    echo 'Del OK';
    //header("Location: controllers/controller-gerer.php"); 
    //exit;
    
}

