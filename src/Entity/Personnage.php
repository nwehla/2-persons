<?php

namespace App\Entity;

class Personnage
{
    public $pseudo;
    public $age;
    public $sexe;
    public $carac = [];
    public static $personnages = [];
    public function __construct($pseudo, $age, $sexe, $carac)
    {
        $this->pseudo = $pseudo;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }
    public static function creerpersonnage()
    {
        $j1 = new Personnage(
            "toto",
            25,
            true,
            [
                "force" => "2",
                "agi" => 2,
                "intel" => 3
            ]
        );
        $j2 = new Personnage(
            "amen",
            10,
            true,
            [
                "force" => "1",
                "agi" => 5,
                "intel" => 0
            ]
        );

        $j3 = new Personnage(
            "tata",
            12,
            false,
            [
                "force" => "3",
                "agi" => 1,
                "intel" => 4
            ]
        );
    }
    public static function getPersonnageParNom($pseudo){
        foreach(self::$personnages as $perso){
            if(strtolower($perso->$pseudo)===$perso){
                return $perso;
            }
        }
    }
}
