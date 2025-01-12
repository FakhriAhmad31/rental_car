<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    public function addCar(Request $request)
{
    $request->validate([
        'brand' => 'required',
        'model' => 'required',
        'plate_number' => 'required|unique:cars,plate_number',
        'daily_rate' => 'required|numeric',
    ]);

    $car = Car::create($request->all());
    return response()->json(['message' => 'Car added successfully', 'car' => $car]);
}

public function listAvailableCars()
{
    $cars = Car::where('is_available', true)->get();
    return response()->json($cars);
}

}
