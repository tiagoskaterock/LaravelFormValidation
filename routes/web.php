<?php

// Início
Route::get('/', 'ClienteControlador@index')->name('inicio');

// Mostra Todos
Route::get('/novo_cliente', 'ClienteControlador@create')->name('novo_cliente');

// Armazena
Route::post('/armazena_novo_cliente', 'ClienteControlador@store')->name('armazena_novo_cliente');