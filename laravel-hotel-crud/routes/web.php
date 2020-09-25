<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'StanzeController@index') -> name('stanze-index');

Route::get('/stanza/{id}', 'StanzeController@show') -> name('stanze-show');

Route::post('/create', 'StanzeController@store') -> name('stanze-create');
