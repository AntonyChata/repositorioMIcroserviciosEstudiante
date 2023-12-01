<?php

use App\Http\Controllers\PasajesController;
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

Route::get('/', function () {
    return view('welcome');
});


// ruta de la API
Route ::post('/registrar-venta', [PasajesController::class,'registrar']);
Route::get("/ver-pasajes", [PasajesController::class,'listar']);
