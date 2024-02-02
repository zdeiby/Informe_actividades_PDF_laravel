<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\activitiesController;

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

//Route::get('/hola', homeController::class);
Route::get('/inicio', [indexController::class,'index']);
Route::get('/', [activitiesController::class, 'activities']);

Route::get('/guardar', [indexController::class, 'guardar']);
Route::get('/leer', [indexController::class, 'leer']);
Route::get('/guardarpdf',[indexController::class, 'guardarpdf']);


// Route::get('curso/{variableURL}', function($variableURL){
//     return "welcome $variableURL";
// });