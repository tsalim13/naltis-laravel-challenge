<?php

namespace App\Http\Repositories;

//use App\Vehicle;
use App\VehicleInterface;

interface IVehiclesRepository
{
    public function store(Array $inputs, VehicleInterface $vh);
}