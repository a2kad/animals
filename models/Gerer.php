<?php
class Gerer
{
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


    public static function delAnimal($id)
    {
        $pdo = Database::getInstancePDO();

        $sql = "DELETE FROM `animals` 
        WHERE
        `id` = $id";

        $pdo->query($sql);

        return true;
    }
    public static function getAnimal($id)
    {
        $pdo = Database::getInstancePDO();

        $sql = "SELECT 
        `a`.`id`,
        `a`.`name`,
        `a`.`date_of_birth`,
        `a`.`tatoo`,
        `a`.`chip`,
        `a`.`weight`,
        `a`.`id_color`,
        `a`.`id_type`,
        `a`.`id_race`,
        `a`.`id_sex`,
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
        type t ON `a`.`id_type` = `t`.`id` 
        HAVING
        `id` = $id";

        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public static function modifierAnimal($id,$date_of_birth,$tatoo,$chip,$name,$weight,$id_color,$id_type,$id_sex,$id_race)
    {
        $pdo = Database::getInstancePDO();

        $sql_upd = "UPDATE `animals` 
        SET 
        `date_of_birth` = '$date_of_birth',
        `tatoo` = '$tatoo',
        `chip` = '$chip',
        `name` = '$name',
        `weight` = '$weight',
        `id_color` = '$id_color',
        `id_type` = '$id_type',
        `id_sex` = '$id_sex',
        `id_race` = '$id_race'
        WHERE
        `id` = '$id'";

        $pdo->query($sql_upd);
        return true;
    }
    public static function getColor()
    {
        $pdo = Database::getInstancePDO();

        $sql = "SELECT * FROM `color`";

        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public static function getRace($type)
    {
        $pdo = Database::getInstancePDO();

        $sql = "SELECT * FROM `race` WHERE `id_type` = $type";

        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public static function getType()
    {
        $pdo = Database::getInstancePDO();

        $sql = "SELECT * FROM `type`";

        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
