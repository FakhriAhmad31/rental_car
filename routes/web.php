<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;

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

Route::get('/', function () {
    return view('layout');
});

// Route::post('/users/register', [UserController::class, 'register'])->name('users.register');

Route::get('/users/register', function () {
    return view('users.register');
})->name('users.register');
Route::post('/register', [UserController::class, 'register']);


Route::post('/register', [UserController::class, 'register']);

Route::get('/users/success', function () {
    return view('users.success');
})->name('users.success');




Route::get('/rentals/rent', function () {
    return view('rentals.rent');
});

Route::post('/rentals/rent', [RentalController::class, 'rentCar'])->name('rentals.rent');

Route::get('/rentals/return', function () {
    return view('rentals.return');
});

Route::post('/rentals/return', [RentalController::class, 'returnCar'])->name('rentals.return');

Route::post('/register', [UserController::class, 'register']);
Route::post('/add-car', [CarController::class, 'addCar']);
Route::get('/available-cars', [CarController::class, 'listAvailableCars']);
Route::post('/rent-car', [RentalController::class, 'rentCar']);
Route::post('/return-car', [RentalController::class, 'returnCar']);