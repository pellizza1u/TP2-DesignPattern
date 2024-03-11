<?php

require('../vendor/autoload.php');

use App\Factory\VehicleFactory;

// ligne de 40 tirets pour séparer les tests dans la console
function displayHorizontalLine() {
    echo str_repeat('-', 40) . PHP_EOL; //utilisation de PHP_EOL pour le saut de ligne dans la console
}

// Test Bicycle expected
$vehicle1 = VehicleFactory::createVehicle(15, 180);
echo "Test 1:" . PHP_EOL;
echo "Vehicle Type: " . get_class($vehicle1) . PHP_EOL;
echo "Cost Per Km: " . $vehicle1->getCostPerKm() . PHP_EOL;
echo "Fuel Type: " . $vehicle1->getFuelType() . PHP_EOL;
displayHorizontalLine();

// Test Car expected
$vehicle2 = VehicleFactory::createVehicle(25, 15);
echo "Test 2:" . PHP_EOL;
echo "Vehicle Type: " . get_class($vehicle2) . PHP_EOL;
echo "Cost Per Km: " . $vehicle2->getCostPerKm() . PHP_EOL;
echo "Fuel Type: " . $vehicle2->getFuelType() . PHP_EOL;
displayHorizontalLine();

// Test Truck expected
$vehicle3 = VehicleFactory::createVehicle(10, 250);
echo "Test 3:" . PHP_EOL;
echo "Vehicle Type: " . get_class($vehicle3) . PHP_EOL;
echo "Cost Per Km: " . $vehicle3->getCostPerKm() . PHP_EOL;
echo "Fuel Type: " . $vehicle3->getFuelType() . PHP_EOL;
displayHorizontalLine();

// Test Car expected
$vehicle4 = VehicleFactory::createVehicle(30, 100);
echo "Test 4:" . PHP_EOL;
echo "Vehicle Type: " . get_class($vehicle4) . PHP_EOL;
echo "Cost Per Km: " . $vehicle4->getCostPerKm() . PHP_EOL;
echo "Fuel Type: " . $vehicle4->getFuelType() . PHP_EOL;
displayHorizontalLine();

// Test Exception expected
try {
    $vehicle5 = VehicleFactory::createVehicle(10, 10);
    echo "Test 5:" . PHP_EOL;
    echo "Vehicle Type: " . get_class($vehicle5) . PHP_EOL;
    echo "Cost Per Km: " . $vehicle5->getCostPerKm() . PHP_EOL;
    echo "Fuel Type: " . $vehicle5->getFuelType() . PHP_EOL;
    displayHorizontalLine();
} catch (\InvalidArgumentException $e) {
    echo "Test 5:" . PHP_EOL;
    echo "Exception caught: " . $e->getMessage() . PHP_EOL;
    displayHorizontalLine();
}
