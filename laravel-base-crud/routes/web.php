<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// rotta con url: /devices che richiama il maincontroller in cui ho messo un method index x chiamare il database -> tabella dei devices
Route::get('/devices', 'MainController@index')
-> name('devices-index'); //assegno un nome alla rotta;

// ore mi serve una nuova rotta più flessibile che mi mandi in una pagina x il singolo elemento
Route::get('/devices/{id}', 'MainController@show')
-> name('device-show');

// rotta per poter creare un nuovo device, che mi porti al form
Route::get('/new/device', 'MainController@create')
-> name('device-create');

// rotta per il post(salvataggio) dei dati inseriti nel form
Route::post('/new/brand/store', 'MainController@store')
    -> name('device-store');
