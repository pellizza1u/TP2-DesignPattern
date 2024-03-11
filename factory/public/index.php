<?php

require('../vendor/autoload.php');

use App\Factory\VehicleFactory;

// Test Bicycle expected
$vehicle1 = VehicleFactory::createVehicle(15, 180);
echo "Test 1:\n";
echo "Vehicle Type: " . get_class($vehicle1) . "\n";
echo "Cost Per Km: " . $vehicle1->getCostPerKm() . "\n";
echo "Fuel Type: " . $vehicle1->getFuelType() . "\n\n";

// Test Car expected
$vehicle2 = VehicleFactory::createVehicle(25, 15);
echo "Test 2:\n";
echo "Vehicle Type: " . get_class($vehicle2) . "\n";
echo "Cost Per Km: " . $vehicle2->getCostPerKm() . "\n";
echo "Fuel Type: " . $vehicle2->getFuelType() . "\n\n";

// Test Truck expected
$vehicle3 = VehicleFactory::createVehicle(10, 250);
echo "Test 3:\n";
echo "Vehicle Type: " . get_class($vehicle3) . "\n";
echo "Cost Per Km: " . $vehicle3->getCostPerKm() . "\n";
echo "Fuel Type: " . $vehicle3->getFuelType() . "\n\n";

// Test Car expected
$vehicle4 = VehicleFactory::createVehicle(30, 100);
echo "Test 4:\n";
echo "Vehicle Type: " . get_class($vehicle4) . "\n";
echo "Cost Per Km: " . $vehicle4->getCostPerKm() . "\n";
echo "Fuel Type: " . $vehicle4->getFuelType() . "\n\n";

// Test Exception expected
try {
    $vehicle5 = VehicleFactory::createVehicle(10, 10);
    echo "Test 5:\n";
    echo "Vehicle Type: " . get_class($vehicle5) . "\n";
    echo "Cost Per Km: " . $vehicle5->getCostPerKm() . "\n";
    echo "Fuel Type: " . $vehicle5->getFuelType() . "\n\n";
} catch (\InvalidArgumentException $e) {
    echo "Test 5:\n";
    echo "Exception caught: " . $e->getMessage() . "\n\n";
}



