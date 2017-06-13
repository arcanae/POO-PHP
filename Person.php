<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author arcanae
 */


$lastname = htmlspecialchars($_POST['lastname']);
$firstname = htmlspecialchars($_POST['firstname']);
$city = htmlspecialchars($_POST['city']);
$age = htmlspecialchars($_POST['age']);


class Person {
    private $firstname;
    private $lastname;
    private $age;
    private $city;
    public function __construct($lastname, $firstname, $city, $age) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->city = $city;
        $this->age = $age;
    }
    
    public function __toString() {
        echo "My name is ".$this->lastname." ".$this->firstname." I'm ".$this->age." and I live in ".$this->city.".";
    }
}

$person = new Person($lastname, $firstname, $city, $age);
echo $person->__tostring();