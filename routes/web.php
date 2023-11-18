<?php

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

Route::get('/saludos', function () {
    return view('saludos');

});

Route::get('/comentarios', function () {
    return view('comentarios');

});

Route::get('/respuestas', function () {
    return view('respuestas');

});

Route::get('/dashboard', function () {
    return view('dashboard');

});

Route::get('/mi-ruta', 'NombreDelControlador@miMetodo');




