<?php

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
    return view('clientes');
})->name('inicio');

Route::get('/novo_cliente', function () {
    return view('novo_cliente');
})->name('novo_cliente');
