<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LittleDog
 *
 * @author arcanae
 */
class LittleDog {
     public $name;
     public $race;
     public $birth;
     public $color;
     public function bark() {
         echo 'woof woof woof';
     }
    public function __toString() {
        return 'Dog name is:' . $this->name.', race:'.$this->race.', color:'.$this->color.', birth:'.$this->birth;
    } 
    
    
    public function __construct($name, $race, $birth, $color) {
        $this->name = $name;
        $this->race = $race;
        $this->birth = $birth;
        $this->color = $color;
    }
    
}
