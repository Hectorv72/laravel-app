<?php

use App\Http\Controllers\ExampleController;
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

Route::get('/', function () {
    return view('welcome');
});


// Modularization
Route::view('/modularization', 'modularization.sections.child');
Route::view('/icecreams', 'modularization.sections.icecreams');


// Rotuing
// Para estas rutas implementaremos el metodo "name" para asignar un nombre de acceso a la ruta
Route::view('/page1', 'routing.firstpage')->name('page1');
Route::view('/page2', 'routing.secondpage')->name('page2');

// Routing por controladores
Route::controller(ExampleController::class)->group(function () {
    Route::get('/controller', 'get');
    // para las siguientes rutas es necesario contener el csrf_token()
    Route::post('/controller', 'post');
    Route::post('/controller', 'post');
});
