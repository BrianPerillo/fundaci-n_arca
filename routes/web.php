<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LineasAccionController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\DonarController;

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

Route::get('/', [IndexController::class, "index"])->name('home');

Route::get('/noticias', [NoticiasController::class, "index"])->name('noticias');

Route::get('/lineas_de_acción', [LineasAccionController::class, "show"])->name('lineas_accion');

Route::get('/proyectos', [ProyectosController::class, "show"])->name('proyectos');

Route::get('/donar', [DonarController::class, "show"])->name('donation');