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

Route::get('/home', 'HomeController@index')->name('home');

/*
Rutas para el moudlo de bautizo
 */
Route::name('bautizo.index')->get('/registro/bautizo','BautizosController@index');
Route::name('bautizo.create')->get('/registro/bautizo/create','BautizosController@create');
Route::name('bautizo.store')->post('/registro/bautizo/','BautizosController@store');

/*
Rutas para el moudlo de comunion
 */
Route::name('comunion.index')->get('/comunion/bautizo','ComunionesController@index');
Route::name('comunion.create')->get('/comunion/bautizo/create','ComunionesController@create');
Route::name('comunion.store')->post('/comunion/bautizo/','ComunionesController@store');

/*
Rutas para el moudlo de bautizo
 */
Route::name('confirmacion.index')->get('/confirmacion/bautizo','ConfirmacionesController@index');
Route::name('confirmacion.create')->get('/confirmacion/bautizo/create','ConfirmacionesController@create');
Route::name('confirmacion.store')->post('/confirmacion/bautizo/','ConfirmacionesController@store');

/*
Rutas para el moudlo de matrimonio
 */
Route::name('matrimonio.index')->get('/matrimonio/bautizo','MatrimoniosController@index');
Route::name('matrimonio.create')->get('/matrimonio/bautizo/create','MatrimoniosController@create');
Route::name('matrimonio.store')->post('/matrimonio/bautizo/','MatrimoniosController@store');

//Route::resource('/admin/bautizo/', 'BautizosController');
//Route::resource('/admin/comunion/', 'ComunionesController');
//Route::resource('/admin/confirmacion/', 'ConfirmacionesController');
//Route::resource('/admin/matrimonio/', 'MatrimoniosController');