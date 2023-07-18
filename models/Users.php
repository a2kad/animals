<?php

class Users{
    private int $use_id;
    private string $use_login;
    private string $use_password;

    public static function checkLogin($login){
        $pdo = Database::getInstancePDO();
        $sql = 'SELECT * FROM `users` WHERE `use_login` = :login';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':login',$login, PDO::PARAM_STR);
        $stmt->execute();

        $stmt->rowCount() != 0 ? $result = true : $result = false;

        return $result;

    }
}