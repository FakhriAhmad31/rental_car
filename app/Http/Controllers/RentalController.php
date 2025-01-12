<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Car;




class RentalController extends Controller
{
    public function rentCar(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'car_id' => 'required|exists:cars,id',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
    ]);

    $car = Car::find($request->car_id);

    if (!$car->is_available) {
        return response()->json(['error' => 'Car is not available'], 400);
    }

    $days = (new \DateTime($request->start_date))->diff(new \DateTime($request->end_date))->days;
    $totalCost = $days * $car->daily_rate;

    $rental = Rental::create([
        'user_id' => $request->user_id,
        'car_id' => $request->car_id,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'total_cost' => $totalCost,
    ]);

    $car->update(['is_available' => false]);

    return response()->json(['message' => 'Car rented successfully', 'rental' => $rental]);
}

public function returnCar(Request $request)
{
    $request->validate([
        'rental_id' => 'required|exists:rentals,id',
    ]);

    $rental = Rental::find($request->rental_id);
    $car = Car::find($rental->car_id);

    $car->update(['is_available' => true]);

    return response()->json(['message' => 'Car returned successfully']);
}


}
