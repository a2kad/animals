<?php

class Database{
    public static function getInstancePDO (){
        
        $dbh = 'mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8mb4';
        try {
            $pdo = new PDO ($dbh, USER_DATABASE, PASSWORD_DATABASE);
            if ($pdo){
                return $pdo;
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }
    }
}