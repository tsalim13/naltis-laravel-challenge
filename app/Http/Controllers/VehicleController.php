<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
class VehicleController extends Controller
{
    protected $_vehicle;
    public function __construct(Vehicle $vehicle)
    {
        $this->_vehicle = $vehicle;
    }
    /**
     * Load all vehicles
     */
    public function index()
    {
       $allVehicles = $this->_vehicle->all();
       //return to vehicles view
    }

    /**
     * Store all kinds of vehicles
     */
    public function store()
    {
        
    }

    /**
     * Update all kinds of vehicles
     */
    public function update()
    {

    }

    /**
     * Remove a vehicle
     */
    public function remove()
    {

    }
}
