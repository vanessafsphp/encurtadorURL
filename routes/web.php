<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('home');
});*/

//Route::post('/debug', 'LinkController@debug')->name('debug');

Route::get('/', 'LinkController@index'); //Home
Route::post('/', 'LinkController@store')->name('generate.link.post'); //Envia post

Route::get('/{code}', 'LinkController@shortLink')->name('short.link'); //redirecionamento de URL
