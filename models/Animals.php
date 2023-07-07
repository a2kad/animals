<?php
class Animals{
    private int  $id;
    private string  $date_of_birth;
    private bool $tatoo;
    private bool  $chip;
    private string  $name;
    private float  $weight;
    private int  $id_color;
    private int  $id_type;
    private int  $id_sex;
    private int  $id_race;
    

    public static function getAllAnimals() : array{
        $pdo = Database::getInstancePDO();

        $sql = "SELECT 
        `a`.`id`,
        `a`.`name`,
        `a`.`date_of_birth`,
        `a`.`tatoo`,
        `a`.`chip`,
        `a`.`weight`,
        `c`.`color`,
        `r`.`name_race`,
        `s`.`sex`,
        `t`.`type`
    FROM
        animals a
            INNER JOIN
        color c ON `a`.`id_color` = `c`.`id`
            INNER JOIN
        race r ON `a`.`id_race` = `r`.`id`
            INNER JOIN
        sex s ON `a`.`id_sex` = `s`.`id`
            INNER JOIN
        type t ON `a`.`id_type` = `t`.`id`";
        
        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
