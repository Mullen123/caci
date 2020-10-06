<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home','HomeController@index')->name('home.index');

Route::get('/informacion_destacada','InformacionController@index')->name('info.index');

Route::get('/preguntas_frecuentes','PreguntasController@index')->name('preguntas.index');

Route::get('/reinscripcion','ReinscripcionController@index')->name('reinscripcion.index');

Route::get('/preinscripcion','PreinscripcionController@index')->name('preinscripcion.index');

Route::get('/login','LoginController@index')->name('login.index');

//centro luz maria

Route::get('/centros_Luz_Maria','CentroLuzMariaController@index')->name('luz_maria.index');

Route::get('/titular_Elisa_Tamara','CentroLuzMariaController@show_titular')->name('titular_Elisa.show_titular');

Route::get('/instalaciones_Luz_Maria','CentroLuzMariaController@show_instalaciones')->name('instalaciones_luz_Maria.show_instalaciones');



//centro eva moreno

Route::get('/centros_Eva_Moreno','CentroEvaMorenoController@index')->name('eva_moreno.index');

Route::get('/titular_Laura_Patricia','CentroEvaMorenoController@show_titular')->name('titular_Laura_Patricia.show_titular');

Route::get('/instalaciones_Eva_Moreno','CentroEvaMorenoController@show_instalaciones')->name('instalaciones_Laura.show_instalaciones');


//centro bertha

Route::get('/centros_Bertha_von','CentroBerthaController@index')->name('bertha.index');

Route::get('/titular_Alicia_Judith','CentroBerthaController@show_titular')->name('titular_Alicia_Judith.show_titular');

Route::get('/instalaciones_Bertha_Von','CentroBerthaController@show_instalaciones')->name('instalaciones_Bertha.show_instalaciones');



//centro Carolina


Route::get('/centros_Carolina_Agazzi','CentroCarolinaController@index')->name('carolina.index');
Route::get('/titular_María_Jesús','CentroCarolinaController@show_titular')->name('titular_Maria_Jesus.show_titular');

Route::get('/instalaciones_Carolina_Agazzi','CentroCarolinaController@show_instalaciones')->name('instalaciones_Carolina.show_instalaciones');
//centros carmen serdan

Route::get('/centros_Carmen_Serdan','CentroCarmenController@index')->name('centros_carmen.index');
Route::get('/titular_María_Ofelia','CentroCarmenController@show_titular')->name('titular_Maria_Ofelia.show_titular');
Route::get('/instalaciones_Carmen_Serdan','CentroCarmenController@show_instalaciones')->name('instalaciones_Carmen_Serdan.show_instalaciones');


//ruta de la vista de mapas

Route::get('/mapas','MapasController@index')->name('mapas');