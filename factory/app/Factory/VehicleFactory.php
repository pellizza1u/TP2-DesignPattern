<?php

namespace App\Factory;

use App\Entity\Vehicle;
use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehicleFactory {
    public static function createVehicle($distance, $weight) {
        if ($distance < 20 && $weight < 20) {
            // Si la distance est inférieure à 20 km et le poids est inférieur à 20 kg, lancer une exception
            throw new \InvalidArgumentException('Cannot determine appropriate vehicle for given criteria.');
        } elseif ($distance < 20) {
            // Si la distance est inférieure à 20 km, créer un vélo
            return new Bicycle(costPerKm: 0.1, fuelType: 'muscle');
        } elseif ($weight > 200) {
            // Si le poids est supérieur à 200 kg, créer un camion
            return new Truck(costPerKm: 0.5, fuelType: 'diesel');
        } elseif ($weight > 20 || $distance >= 20) {
            // Si le poids est supérieur à 20 kg ou la distance est de 20 km ou plus, créer une voiture
            return new Car(costPerKm: 0.3, fuelType: 'petrol');
        } else {
            // Si aucun des critères précédents n'est rempli, lancer une exception
            throw new \InvalidArgumentException('Cannot determine appropriate vehicle for given criteria.');
        }
    }
}
