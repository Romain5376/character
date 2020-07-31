<?php

namespace App\Entity;

class Arme {
    private $name;
    private $description;
    private $value;

    public static $armes=[];

    public function __construct($name, $description, $value) {
        $this->name = $name;
        $this->description = $description;
        $this->value = $value;
        self::$armes[] = $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public static function weaponCreate() {
        new Arme("Epée","Une superbe épée tranchante",15);
        new Arme("Hache","Une puissante hache",20);
        new Arme ("Arc","Un arc d'une précision chirurgicale",12);
    }

    public static function getWeaponByName($name){
        foreach(self::$armes as $arme) {
            if(str_replace("é","e",$arme->name) === $name) {
                return $arme;
            }
        }
    }
}