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

use app\Http\Controllers\Web\WebCivilizationController;
use app\Http\Controllers\Web\WebBuildingController;
use app\Http\Controllers\Web\WebReleasesController;
use app\Http\Controllers\Web\WebTechnologyController;
use app\Http\Controllers\Web\WebUnitController;

// Civilization routes
Route::get('/civilizations', [WebCivilizationController::class, 'index']);
Route::get('/civilizations/{id}', [WebCivilizationController::class, 'show']);

// Building routes
Route::get('/buildings', [WebBuildingController::class, 'index']);
Route::get('/buildings/{id}', [WebBuildingController::class, 'show']);

// Releases routes
Route::get('/releases', [WebReleasesController::class, 'index']);
Route::get('/releases/{id}', [WebReleasesController::class, 'show']);

// Technology routes
Route::get('/technologies', [WebTechnologyController::class, 'index']);
Route::get('/technologies/{id}', [WebTechnologyController::class, 'show']);

// Unit routes
Route::get('/units', [WebUnitController::class, 'index']);
Route::get('/units/{id}', [WebUnitController::class, 'show']);


