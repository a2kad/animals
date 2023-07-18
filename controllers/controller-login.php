<?php
require_once "../config.php";
require_once "../helpers/Database.php";
require_once "../models/Animals.php";
require_once "../models/Gerer.php";
require_once "../models/Users.php";

$regexString = '/^[a-zA-Z]+$/';
$error_login = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        if(empty($username)){
            $error_login['name']='Identifiant : <i class="error">Champs obligatoire</i>';
            $error_login['name_class']='is-invalid';
        }else if (!preg_match($regexString, $username)) {
            $error_login['name'] = 'Identifiant : <i class="error">Mauvais format du identifiant</i>';
            $error_login['name_class']='is-invalid';
        }
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if(empty($password)){
            $error_login['pass']='Mot de passe : <i class="error">Champs obligatoire</i>';
            $error_login['pass_class']='is-invalid';
        }else if (!preg_match($regexString, $password)) {
            $error_login['pass'] = 'Mot de passe : <i class="error">Mauvais format du mot de passe</i>';
            $error_login['pass_class']='is-invalid';
        }
    }
    if(Users::checkLogin($username)){
        $_SESSION['user']=$username;
        header('Location: ../controllers/controller-admin.php');
        exit;
    }else{
        $error_login['name']= 'Identifiant : <i class="error">Login incorrect</i>';
        $error_login['name_class']='is-invalid';
    }
}

include '../views/login.php';