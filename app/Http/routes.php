<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Saludo', function () {
    echo "Hola Mundo tic 73";
});

Route::get('/areatriangulo', function () {
    $base =34;
    $altura = 40;
    $area = $base * $altura /2;
    echo "El Área del triangulo es " . $area;
});

Route::get('/pago/{cant}/{costo}',
 function ($cant,$costo) {
 	$pago = $cant * $costo;
 	echo "El pago es de $pago";
 });

Route::get('/ac/{radio}' , 'curso@areacirculo');

Route::get('/altamaestro' , 'curso@altamaestro');

Route::POST('/guardamaestro' , 'curso@guardamaestro')->name('guardamaestro');

Route::get('/reportemaestros' , 'curso@reportemaestros');

Route::get('/eliminam/{idm}' , 'curso@eliminam')->name('eliminam');

Route::get('/modificam/{idm}' , 'curso@modificam')->name('modificam');

Route::POST('/editamaestro' , 'curso@editamaestro')->name('editamaestro');





