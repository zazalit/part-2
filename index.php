<?php

//


require_once "Vehicle.php";
include('Bicycle.php');

// BICYCLE

//create new object
$bike = new Bicycle('red', '8');

//forward and brake
echo $bike->forward() . '<br>';
echo ' The bicycle speed is: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';
echo ' The bicycle speed is: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo "" . "<br>";

// CAR

include ('Car.php');

//create new object
$simpsomsCar = new Car('pink',5,'gazole');
$simpsomsCar -> setCurrentSpeed(0);
$simpsomsCar -> setNbWheels(4);
$simpsomsCar -> setenergyLevel(50);

//start, forward and brake
echo $simpsomsCar->forward(). '<br>';
echo ' The speed of the car is: ' .$simpsomsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $simpsomsCar->brake(). '<br>';
echo 'The speed of the car is: ' .$simpsomsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

//TRUCK

//create new object
include ('Truck.php');

$truck = new truck ('grey', '8', 'fuel', '300');
$truck->setloading(500);
echo $truck->forward(). '<br>';
echo 'The storage truck is: ' .$truck->loading() .  '<br>';
echo $simpsomsCar->brake();
