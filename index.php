<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');

echo $car->forward();
var_dump($car);

$truck = new Truck(50, "blue", 2, "fuel");

$truck->setLoadLevel(70);
echo $truck->isFilled();

$truck->setLoadLevel(50);
echo $truck->isFilled();

var_dump($truck);
