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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/asesor/resumen', 'Asesor\ResumenController@ShowView')->name('AsesorResumen');
Route::get('/asesor/ejercicios/listado', 'Asesor\EjerciciosController@ShowViewListado')->name('AsesorEjerciciosListado');
Route::post("/asesor/ejercicios/play/{hash1}/{id}/{hash2}/{duration}/{hash3}/{size}/{hash4}", 'Asesor\EjerciciosController@RecibirParametros');
Route::get('/asesor/citas/listado', 'Asesor\CitasController@ShowViewListado')->name('AsesorCitasListado');