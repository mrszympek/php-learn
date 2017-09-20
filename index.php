
<?php 

require 'autoload.php';

Vehicle::$euroPrice = 9;

$car = new Car('Romet');
$car->setPrice(5000);
// $car->setBrand('Audi');
$car->setType('sedan');

// $car->setProductionDate(1994);
$car->setOwner('Paweł');


// $car2 = new Car;
// $car2->setBrand('Seat');
// $car2->setType('kombi');
// $car2->setProductionDate(2012);
// $car2->setOwner('Adam');


$kasia = new Person('Kasia', 2005);
$kasia->setBirthPlace('Zywiec');

$bartek = new Person('Bartek');
$bartek->setBirthDate(2005);
$bartek->setBirthPlace('Zywiec');


$bike1 = new Bike('Kross');
$bike1->setProductionDate(2000);
$bike1->setOwner('Marian');
$bike1->setPrice(1000);
// $bike1->setBrand('Giant');

echo '<pre>';

var_dump($bike1->getPriceInEur());
var_dump($car->getPriceInEur());
var_dump($car);