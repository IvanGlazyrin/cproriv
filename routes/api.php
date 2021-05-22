<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CommandController;
use App\Http\Controllers\Api\v1\CommandTypeController;
use App\Http\Controllers\Api\v1\EquipmentController;
use App\Http\Controllers\Api\v1\RentalPointController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('command', CommandController::class);
Route::resource('command-type', CommandTypeController::class);
Route::resource('equipment', EquipmentController::class);
Route::resource('rental-point', RentalPointController::class);