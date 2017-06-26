<?php

include_once './worker.php';

$employe = new Employe('Bobson', 
        'Bob', 
        40, 
        'Rhône Alpes', 
        new DateTime('2011-04-02'),
        3000);
echo $employe->anciennete();

echo '<br/>';
echo $employe->getSalaire() . '€';
echo '<br/>';
$employe->augmentation();
echo $employe->getSalaire() . '€';

echo '<br/>';
$date = new DateTime();
echo $date->format('d/m/Y H:i');