<?php

include_once 'Personne.php';

class Employe extends Personne{
    public $dateArrivee;
    public $salaire;
     
    public function __construct(string $nom, 
            string $prenom, 
            int $age, 
            string $region,
            DateTime $dateArrivee,
            int $salaire) {
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->region = $region;
    }
    
    public function anciennete():int {
    
        $today = new DateTime();
        $difference = $this->dateArrivee->diff($today);
        return $difference->y;
    }
    
    public function augmentation() {
        $anciennete = $this->anciennete();
        if($anciennete < 5) {
            $this->salaire *= 1.02;
        }elseif($anciennete < 10) {
            $this->salaire *= 1.05;
        }else{
            $this->salaire *= 1.1;
        }
        
    }
    
    public function getSalaire():int {
        return $this->salaire;
    }
}