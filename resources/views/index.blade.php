<!doctype html>
<html>
    <body>

        <button onclick="window.location='{{url('/add')}}'" >Add new vehicle</button>
        <button onclick="window.location='{{url('/getVehicles/Car')}}'" >Get all cars</button>
        <button onclick="window.location='{{url('/getVehicles/Truck')}}'" >Get all trucks</button>
        <button onclick="window.location='{{url('/getVehicles/Vehicle')}}'" >Get all vehicles</button>

    </body>
</html>