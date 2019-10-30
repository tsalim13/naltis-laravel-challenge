<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'VehicleController');
Route::get('/add', function () {
    return view('add');
});

/*Route::get('/getCars','IndexVehicleController@getCars');
Route::get('/getTrucks','IndexVehicleController@getTrucks');*/
Route::get('/getVehicles/{v}','IndexVehicleController@getVehicles');
