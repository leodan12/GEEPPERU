<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PreguntasController;

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

Route::get('/', [CartController::class, 'shop'])->name('inicio');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');


Route::view('/nosotros', 'nosotros.sobrenosotros');
Route::view('/trayectoria', 'nosotros.nuestratrayectoria');
Route::view('/principios', 'nosotros.principios');
Route::view('/preguntasfrecuentes', 'nosotros.preguntasfrecuentes');
Route::get('/preguntasfrecuentes', [PreguntasController::class, 'index'])->name('preguntas.index');
Route::view('/contactanos', 'nosotros.contactanos');

//gestionar los preguntas
Route::get('/pregunta/create',[PreguntasController::class,'create']);
Route::post('/pregunta/store', [PreguntasController::class, 'store']);//Registrar
Route::get('/pregunta/index',[PreguntasController::class,'lista']);
Route::get('/pregunta/show/{id}', [PreguntasController::class, 'show']);//ver
Route::get('/pregunta/{id}/edit', [PreguntasController::class, 'edit']);//Actualizar
Route::post('/pregunta/update/{id}', [PreguntasController::class, 'update']);//Registrar
Route::get('/pregunta/{id}/delete', [PreguntasController::class, 'destroy']);//Actualizar

Route::get('/deletedetallepregunta/{id}', [PreguntasController::class, 'destroydetallepregunta']); //eliminar detalle pregunta

