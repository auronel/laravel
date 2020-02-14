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
    return view('index');
});

Route::get('alumnos/{alumno}/fmatricula','AlumnoController@fmatricula')->name('alumnos.fmatricula');
Route::get('alumnos/{alumno}/fcalificar','AlumnoController@fcalificar')->name('alumnos.fcalificar');
//Cargamos los resources
Route::resource('alumnos','AlumnoController');
Route::resource('modulos','ModuloController');
//Los post debajo de los resources
Route::post('alumnos2','AlumnoController@matricular')->name('alumnos.matricular');
Route::post('alumnos1','AlumnoController@calificar')->name('alumnos.calificar'); //cuando tenemos varias rutas post con el mismo nombre(alumnos) siempre coge la ultima, renombramos una de ellas para que no pase eso

