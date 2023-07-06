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

        $sql = "";
        
        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
