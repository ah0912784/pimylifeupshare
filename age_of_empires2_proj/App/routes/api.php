<?php

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
namespace App\app\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiBuildingController;
use App\Http\Controllers\ApiCivilizationController;
use App\Http\Controllers\ApiReleasesController;
use App\Http\Controllers\ApiTechnologyController;
use App\Http\Controllers\ApiUnitController;



// Civilization routes
Route::get('/api/civilizations', [ApiCivilizationController::class, 'index']);
Route::get('/api/civilizations/{id}', [ApiCivilizationController::class, 'show']);
Route::post('/api/civilizations', [ApiCivilizationController::class, 'store']);
Route::put('/api/civilizations/{id}', [ApiCivilizationController::class, 'update']);
Route::delete('/api/civilizations/{id}', [ApiCivilizationController::class, 'destroy']);

// Building routes
Route::get('/api/buildings', [ApiBuildingController::class, 'index']);
Route::get('/api/buildings/{id}', [ApiBuildingController::class, 'show']);
Route::post('/api/buildings', [ApiBuildingController::class, 'store']);
Route::put('/api/buildings/{id}', [ApiBuildingController::class, 'update']);
Route::delete('/api/buildings/{id}', [ApiBuildingController::class, 'destroy']);

// Releases routes
Route::get('/api/releases', [ApiReleasesController::class, 'index']);
Route::get('/api/releases/{id}', [ApiReleasesController::class, 'show']);
Route::post('/api/releases', [ApiReleasesController::class, 'store']);
Route::put('/api/releases/{id}', [ApiReleasesController::class, 'update']);
Route::delete('/api/releases/{id}', [ApiReleasesController::class, 'destroy']);

// Technology routes
Route::get('/api/technologies', [ApiTechnologyController::class, 'index']);
Route::get('/api/technologies/{id}', [ApiTechnologyController::class, 'show']);
Route::post('/api/technologies', [ApiTechnologyController::class, 'store']);
Route::put('/api/technologies/{id}', [ApiTechnologyController::class, 'update']);
Route::delete('/api/technologies/{id}', [ApiTechnologyController::class, 'destroy']);

// Unit routes
Route::get('/api/units', [ApiUnitController::class, 'index']);
Route::get('/api/units/{id}', [ApiUnitController::class, 'show']);
Route::post('/api/units', [ApiUnitController::class, 'store']);
Route::put('/api/units/{id}', [ApiUnitController::class, 'update']);
Route::delete('/api/units/{id}', [ApiUnitController::class, 'destroy']);
