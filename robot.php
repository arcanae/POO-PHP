<?php
class Robot {
    public $number;

    public function hello() {
        echo 'bloup';
    }

}

class Roomba extends Robot {
    public function cleanUp() {
        echo 'I clean up';
    }
}

class KitchenRobot extends Roomba {
    public function cleanUp() {
       return parent::cleanUp().'in the kitchen';
    }
}