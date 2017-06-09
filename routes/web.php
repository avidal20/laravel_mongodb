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
    return view('welcome');
});

Auth::routes();


//Rutas de administracion
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    

    //Rutas de modulos

    // Features - Caracteristicas
    Route::get('/features', 'FeatureController@index')->name('features');
    Route::get('/features/sizes', 'FeatureController@sizes')->name('features.sizes');
    Route::get('/features/colors', 'FeatureController@colors')->name('features.colors');

});
