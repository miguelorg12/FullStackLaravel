<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
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

Route::get('/', [PersonaController::class, 'index']);
Route::get('/persona', [PersonaController::class, 'showStore']);
Route::post('/registropersona', [PersonaController::class, 'store'])->name('persona.store');
Route::get('/persona/{id}', [PersonaController::class, 'showUpdate'])->where('id', '[0-9]+');
Route::put('/updatepersona/{id}', [PersonaController::class, 'update'])->name('persona.update');
Route::delete('/deletepersona/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');

Route::get('/formulario', [PersonaController::class, 'formulario'])->name('formulario');
Route::post('/formulario', [PersonaController::class, 'guardar'])->name('store');
