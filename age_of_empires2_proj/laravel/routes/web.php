<?php

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

use App\Http\Controllers\Web\CivilizationController;
use App\Http\Controllers\Web\BuildingController;
use App\Http\Controllers\Web\TechnologyController;
use App\Http\Controllers\Web\UnitController;

Route::get('/civilizations', [CivilizationController::class, 'index']);
Route::get('/buildings', [BuildingController::class, 'index']);
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/units', [UnitController::class, 'index']);


