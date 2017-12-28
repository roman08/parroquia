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
Route::name('bautizo.store')->post('/registro/bautizo/store','BautizosController@store');
Route::name('bautizo.edit')->get('/registro/bautizo/{id}/edit', 'BautizosController@edit');
Route::name('bautizo.update')->post('/registro/bautizo/{id}/update', 'BautizosController@update');
Route::name('bautizo.destroy')->get('/registro/bautizo/{id}/destroy', 'BautizosController@destroy');
Route::name('bautizo.show')->get('/registro/bautizo/{id}/show', 'BautizosController@show');
/*
Rutas para el moudlo de comunion
 */
Route::name('comunion.index')->get('/registro/comunion','ComunionesController@index');
Route::name('comunion.create')->get('/registro/comunion/create','ComunionesController@create');
Route::name('comunion.store')->post('/registro/comunion/store','ComunionesController@store');

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