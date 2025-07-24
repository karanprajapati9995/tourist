<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/',[HomeController::class, 'homeShow']);
Route::get('/contact',[HomeController::class, 'contactShow']);
Route::get('/destinations/{slug?}', [HomeController::class, 'destination'])->name('Destination');
Route::get('/destination/{slug?}', [HomeController::class, 'destinationDetails'])->name('DestinationDetails');
Route::get('/packages/{slug?}', [HomeController::class, 'package'])->name('Packages');
Route::get('/package/{slug?}', [HomeController::class, 'packageDetails'])->name('PackageDetails');
