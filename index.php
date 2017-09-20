
<?php 

require 'car.php';
require 'person.php';

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


$kasia = new Person;
$kasia->setName('Kasia');
$kasia->setBirthDate(2005);
$kasia->setBirthPlace('Zywiec');

echo '<pre>';
var_dump($kasia);