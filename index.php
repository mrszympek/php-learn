
<?php 

require 'car.php';

$car = new Car;
$car->setBrand('Audi');
$car->setType('sedan');
$car->setProductionDate(1994);
$car->setOwner('Paweł');


$car2 = new Car;
$car2->setBrand('Seat');
$car2->setType('kombi');
$car2->setProductionDate(2012);
$car2->setOwner('Adam');

echo '<pre>';
var_dump($car);