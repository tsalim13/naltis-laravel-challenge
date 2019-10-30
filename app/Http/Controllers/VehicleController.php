<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Truck;

use App\Http\Repositories\IVehiclesRepository;
use App\Http\Controllers\VehiclesFactory;

class VehicleController extends Controller
{
    protected $_vehicle;
    protected $vehiclesRepository = null;
    protected $vehiclesFactory;
    public function __construct(Vehicle $vehicle,IVehiclesRepository $vehiclesRepository,VehiclesFactory $vehiclesFactory)
    {
        $this->_vehicle = $vehicle;
        $this->vehiclesRepository = $vehiclesRepository;
        $this->vehiclesFactory = $vehiclesFactory;
    }
    /**
     * Load all vehicles
     */
    public function index()
    {
       //$allVehicles = $this->_vehicle->all();

       /* $vehicle = new Vehicle;*/
       // dd($this->_vehicle->all());
    
      /*  $t = new Truck;
        dd($t->all());*/


       return view('index');
    }

    /**
     * Store all kinds of vehicles
     */
    public function store(Request $request)
    {

        $v = $this->vehiclesFactory->createVehicles($request->v);

        $vv = $this->vehiclesRepository->store($request->all(), $v);

        dd($vv);

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
