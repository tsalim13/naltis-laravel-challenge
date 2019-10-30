<?php

namespace App\Http\Repositories;

//use App\Vehicle;
use App\VehicleInterface;


class VehiclesRepository implements IVehiclesRepository
{

    public function store(Array $inputs, VehicleInterface $vh)
	{
        $vh->model = $inputs['model'];;
        $vh->make = $inputs['make'];;
        $vh->year = $inputs['year'];;
        $vh->save();		

		return $vh;
    }
    
    public function all(VehicleInterface $vh)
    {
        return $vh->all();
    }

}