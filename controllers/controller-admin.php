<?php
if (!isset($_SESSION['user'])){
    header('Location: ../controllers/controller-login.php');
    exit;
}else{

require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
include '../views/admin.php';
}