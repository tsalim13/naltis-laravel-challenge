<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Car;
use App\Truck;

class VehiclesFactory 
{
    private $vehicles = [
        'Truck' => Truck::class,
        'Car' => Car::class,
        'Vehicle' => Vehicle::class
    ];

    public function createVehicles(string $v)
    {
        
        $vehicle = $this->vehicles[$v];

        $vvv = new $vehicle;

        return $vvv;
        
    }
}