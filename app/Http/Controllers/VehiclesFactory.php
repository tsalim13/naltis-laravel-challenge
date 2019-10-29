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
        'Car' => Car::class
    ];

    public function createVehicles(string $v)
    {
        //echo "  cretae vhcl factory  ". $v ."  ";
        $vehicle = $this->vehicles[$v];

            //test if si classe existe
            //echo "  vf created 111 ";
            $vvv = new $vehicle;
           // dd($vvv);
           // echo "  vf created 222 ";
            return $vvv;
        
    }
}