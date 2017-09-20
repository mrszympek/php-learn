
<?php 

require 'car.php';

$car = new car;
$car2 = new car;

$car->set_Brand('Audi');
$car->set_type('sedan');
$car->set_production_date(1994);
$car->set_owner('Paweł');

$car2->set_Brand('Seat');
$car2->set_type('kombi');
$car2->set_production_date(2012);
$car2->set_owner('Adam');

