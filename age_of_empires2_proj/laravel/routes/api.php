<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\CivilizationController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UnitController;

Route::get('/civilizations', [CivilizationController::class, 'index']);
Route::post('/civilizations', [CivilizationController::class, 'store']);
Route::get('/civilizations/{id}', [CivilizationController::class, 'show']);
Route::put('/civilizations/{id}', [CivilizationController::class, 'update']);
Route::delete('/civilizations/{id}', [CivilizationController::class, 'destroy']);

// Buildings Routes
Route::get('/buildings', [BuildingController::class, 'index']);
Route::post('/buildings', [BuildingController::class, 'store']);
Route::get('/buildings/{id}', [BuildingController::class, 'show']);
Route::put('/buildings/{id}', [BuildingController::class, 'update']);
Route::delete('/buildings/{id}', [BuildingController::class, 'destroy']);

// Technologies Routes
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::post('/technologies', [TechnologyController::class, 'store']);
Route::get('/technologies/{id}', [TechnologyController::class, 'show']);
Route::put('/technologies/{id}', [TechnologyController::class, 'update']);
Route::delete('/technologies/{id}', [TechnologyController::class, 'destroy']);

// Units Routes
Route::get('/units', [UnitController::class, 'index']);
Route::post('/units', [UnitController::class, 'store']);
Route::get('/units/{id}', [UnitController::class, 'show']);
Route::put('/units/{id}', [UnitController::class, 'update']);
Route::delete('/units/{id}', [UnitController::class, 'destroy']);
