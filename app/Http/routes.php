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
    return view('home');
});
Route::get('tiendas', function(){
    return view('tiendas');
});
Route::get('colecciones/california_summer', function(){
    return view('colecciones.california_summer');
});
Route::get('colecciones/habana_cuba', function(){
    return view('colecciones.habana_cuba');
});
Route::get('colecciones/power_women', function(){
    return view('colecciones.power_women');
});
Route::get('colecciones/back_to', function(){
    return view('colecciones.back_to');
});
Route::get('colecciones/mi_tierra', function(){
    return view('colecciones.mi_tierra');
});
Route::get('pedidos', function(){
    return view('pedidos');
});
Route::get('contactenos', function(){
    return view('contactenos');
});
Route::get('making_off', function(){
    return view('making_off');
});
Route::get('nuestras_marcas', function (){
    return view('nuestras_marcas');
});
Route::get('franquicia', function (){
    return view('franquicia');
});
Route::get('trabaja_con_nosotros', function (){
    return view('trabaja');
});
Route::get('politicas_garantia_calidad', function (){
    return view('politicas');
});
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );
Route::post('send_pedido', ['as' => 'send_pedido', 'uses' => 'MailController@sendPedido'] );
Route::get('pedido', ['as' => 'pedido', 'uses' => 'MailController@index'] );

//Rutas para el logueo

/*Route::get('/admin', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'auth.login'
]);

Route::post('/admin', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'auth.login'
]);

Route::get('/admin/logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'auth.logout'
]);

//Ruta para el registro de clientes

Route::post('/cliente/registro', [
    'uses'  => 'personasController@store',
    'as'    => 'public.registro' 
]);

//Rutas administrativas

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/home', [
        'uses'  => 'adminController@index',
        'as'    => 'admin.home'
    ]);

    Route::resource('personas', 'personasController');
});*/