<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PropertyController;
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

Route::get('/',         [MainController::class, 'index'])->name('home');
Route::get('nosotros',  [MainController::class, 'about'])->name('about');
Route::get('contacto',  [MainController::class, 'contact'])->name('contact');
Route::get('sucursales',[MainController::class, 'branches'])->name('branches');
Route::get('proyectos', [PropertyController::class, 'index'])->name('property.index'); // TO DO
Route::get('solicitar', [PropertyController::class, 'request'])->name('property.request');
Route::get('mapa',      [PropertyController::class, 'map'])->name('property.map');

