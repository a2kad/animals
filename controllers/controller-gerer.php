<?php
require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Gerer.php";

if (isset($_GET['del'])){
    $id = $_GET['del'];
    $result = Gerer::delAnimal($id);
    echo 'Del OK';
}
include '../views/gerer.php';


