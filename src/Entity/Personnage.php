<?php

namespace App\Entity;

class Personnage
{

    public $name;
    public $age;
    public $sexe;
    public $carac = [];

    public static $personnages=[];

    public function __construct($name, $age, $sexe, $carac)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }

    public static function characterCreate()
    {
        $p1 = new Personnage("Marc", 40, true, [
            "force" => 3,
            "agi" => 2,
            "intel" => 3
        ]);

        $p2 = new Personnage("Milo", 27, true, [
            "force" => 5,
            "agi" => 1,
            "intel" => 2
        ]);

        $p3 = new Personnage("Tya", 25, false, [
            "force" => 1,
            "agi" => 2,
            "intel" => 5
        ]);
    }
    
    public static function getPersonnageByName($nom){
        foreach(self::$personnages as $perso) {
            if(strtolower($perso->name) === $nom) {
                return $perso;
            }
        }
    }
}
