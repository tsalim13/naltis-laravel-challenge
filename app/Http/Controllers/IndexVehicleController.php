<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;
use App\Http\Repositories\IVehiclesRepository;
use App\Http\Controllers\VehiclesFactory;

class IndexVehicleController extends Controller
{
    protected $vehicles;
    protected $vehiclesRepository;
    protected $vehiclesFactory;

    public function __construct(IVehiclesRepository $vehiclesRepository,VehiclesFactory $vehiclesFactory,Vehicle $vehicles)
    {
        $this->vehicles = $vehicles;
        $this->vehiclesRepository = $vehiclesRepository;
        $this->vehiclesFactory = $vehiclesFactory;
    }

    public function getVehicles(String $v)
    {
        $vh = $this->vehiclesFactory->createVehicles($v);

        $vv = $this->vehiclesRepository->all($vh);

        //dd($vv);
        return view('show', ["vehicles"=>$vv]);
    }
}
