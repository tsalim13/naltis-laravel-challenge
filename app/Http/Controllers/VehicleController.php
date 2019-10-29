<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

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

       $vehicle = new Vehicle;

    
       return view('crud',['car' => $vehicle ]);
    }

    /**
     * Store all kinds of vehicles
     */
    public function store(Request $request)
    {
        //$c = new Vehicle;
        /*if($request->v == "Car")
        {
            $c = new Car;
        }
        else if($request->v == "Truck")
        {
            $c = new Truck;
        }*/

        $v = $this->vehiclesFactory->createVehicles($request->v);
       // echo "   vh controller  ";
        //dd($v);
        $vv = $this->vehiclesRepository->store($request->all(), $v);

        dd($vv);


       /* $c->model = "mmmm";
        $c->make = "kk";
        $c->year = "22";
        $c->save();
        dd($c->type);*/
        //dd($request->all());
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
