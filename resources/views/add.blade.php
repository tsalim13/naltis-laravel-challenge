<!doctype html>
<html>
    <body>
        
        {!! Form::open(['action' => 'VehicleController@store']) !!}
            <div>    
                <label for="model">Model:</label>
                <input type="text" class="form-control" name="model"/>
            </div>
  
            <div>
                <label for="make">Make:</label>
                <input type="text" class="form-control" name="make"/>
            </div>

            <div>
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year"/>
            </div>
            <div>
                <label for="v">v:</label>
                <select name="v"> 
                 <option value="Truck">Truck</option>
                 <option value="Car">Car</option>
                </select>
            </div>
            <button type="submit">Add</button>
        {!! Form::close() !!}
  
    </body>
</html>