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

//Route::get('/hola/{url}', homeController::class);
// Route::get('/inicio/{url}', [indexController::class,'index']);
 //Route::get('/guardar', [indexController::class, 'guardar']);
 //Route::get('/leer', [indexController::class, 'leer']);
// Route::get('/leerActividadespdf',[indexController::class,'leerActividadespdf']);
Route::get('/guardarpdf/{url}',[indexController::class, 'guardarpdf']);

Route::get('/leerActividades',[activitiesController::class, 'leerActividades']);
Route::get('/editar', [activitiesController::class, 'editar']);
Route::post('/guardarimagen', [activitiesController::class, 'guardarimagen']);
Route::post('/guardarimagenactualizar', [activitiesController::class, 'guardarimagenactualizar']);
Route::post('/verificaimagen', [activitiesController::class, 'verificaimagen']);  
Route::get('/{parametro}', [activitiesController::class, 'activities']);

// Route::get('curso/{variableURL}', function($variableURL){
//     return "welcome $variableURL";
// });