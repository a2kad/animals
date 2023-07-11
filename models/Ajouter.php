<?php

class Ajouter {
   private int  $id;
   private string  $date_of_birth;
   private bool $tatoo;
   private bool  $chip;
   private string  $name;
   private float  $weight;
   private int  $id_color;
   private int  $id_type;
   private int $id_sex;
   private int  $id_race;

   public static function addAnimal($name, $type, $race, $sex, $date, $weight, $tatoo, $color, $chip){
       $pdo = Database::getInstancePDO();

       $sql = "INSERT INTO `animals` (name ,id_type ,id_race ,id_sex ,date_of_birth ,weight ,tatoo ,id_color ,chip)
       VALUES ('$name' ,$type ,$race ,$sex ,'$date' ,$weight ,$tatoo ,$color ,$chip)";

       $pdo->query($sql);
       return true;
   }
}
