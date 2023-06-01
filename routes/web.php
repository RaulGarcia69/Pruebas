<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ConocenosController;
use App\Http\Controllers\ContactoController;

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

Route::get('/presentacion', function () {
    return view('presentacion');
});

Route::get('/tienda', [TiendaController::class, 'index'])->name('tienda');
Route::get('/conocenos', [ConocenosController::class, 'index'])->name('conocenos');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');