<?php

include_once("worker.php");

class Company {
   public $workers;
   public $turnover;

   public function __construct($worker1, $worker2, $worker3, int $turnover){
       $this->workers = [$worker1, $worker2, $worker3];
       $this->turnover = $turnover;
   }

   public function revaluate(){
        foreach($this->workers as $value) {
            $anciennete = $value->anciennete();
            if ($anciennete > 1) {
                $value->salaire *= 1.2;
            }
        }
   }
}

$worker1 = new Employe('Bobson', 
        'Bob', 
        40, 
        'Rhône Alpes', 
        new DateTime('2011-04-02'),
        3000);

$worker2 = $employe = new Employe('Bloup', 
        'Jean', 
        25, 
        'Rhône Alpes', 
        new DateTime('2016-12-03'),
        3000);

$worker3 = $employe = new Employe('Cool', 
        'Louis', 
        27, 
        'Rhône Alpes', 
        new DateTime('2013-07-21'),
        3000);

$simplon = new Company($worker1,$worker2,$worker3, 12000);

echo "</br>".$worker1->prenom.": ".$worker1->salaire."</br>".$worker2->prenom.": ".$worker2->salaire."</br>".$worker3->prenom.": ".$worker3->salaire."</br>";
$simplon->revaluate();
echo "Salaire apres réevaluation:";
echo "</br>".$worker1->prenom.": ".$worker1->salaire."</br>".$worker2->prenom.": ".$worker2->salaire."</br>".$worker3->prenom.": ".$worker3->salaire."</br>";

?>
