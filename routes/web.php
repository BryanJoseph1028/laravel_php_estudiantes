<?php

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

Route::get('/',[EstudiantesController::class, 'index'])->name('Estudiantes.index');
Route::get('/create',[EstudiantesController::class, 'create'])->name('Estudiantes.create');
Route::get('/edit',[EstudiantesController::class, 'edit'])->name('Estudiantes.edit');
