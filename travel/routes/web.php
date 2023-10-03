<?php

use App\Http\Controllers\AirlineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/airlines', [AirlineController::class, 'index']);

Route::get('/api/airlines/{id}', [AirlineController::class, 'show']);

Route::post('/api/airlines', [AirlineController::class, 'store']);

Route::put('/api/airlines/{id}', [AirlineController::class, 'update']);

Route::delete('/api/airlines/{id}', [AirlineController::class, 'destroy']);

Route::get('/api/users', [UsersController::class, 'index']);

Route::get('/airline/new', [AirlineController::class, 'newView']);

Route::get('/airline/edit/{id}', [AirlineController::class, 'editView']);

Route::get('/airline/list', [AirlineController::class, 'listView']);





