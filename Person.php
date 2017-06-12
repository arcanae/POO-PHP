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
$gender = htmlspecialchars($_POST['gender']);
$age = htmlspecialchars($_POST['age']);


class Person {
    public $firstname;
    public $lastname;
    public $age;
    public $gender;
    public function __construct($lastname, $firstname, $gender, $age) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->gender = $gender;
        $this->age = $age;
    }
}

$person = new Person($lastname, $firstname, $gender, $age);
echo $person->firstname;
echo $person->lastname;
echo $person->gender;
echo $person->age;