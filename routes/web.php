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

Route::get('/clientes/novo', 'App\Http\Controllers\CadastrosController@create');
Route::post('/clientes/novo','App\Http\Controllers\CadastrosController@store')->name('cadastrar_cliente');
Route::get('/clientes', 'App\Http\Controllers\CadastrosController@show');
