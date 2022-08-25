<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeformationController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::resource('batiments', BatimentController::class);
Route::resource('eleves',EleveController::class);
Route::resource('formations',FormationController::class);
Route::resource('types',TypeformationController::class);
