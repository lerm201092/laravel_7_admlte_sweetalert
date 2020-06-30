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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

// --------------------- ASESOR --------------------
Route::get('/asesor/resumen',               'Asesor\ResumenController@ShowView')            ->name('AsesorResumen');
// ----> Rutas
Route::get('/asesor/ejercicios/listado',    'Asesor\EjerciciosController@ShowViewListado')  ->name('AsesorEjerciciosListado');
Route::get('/asesor/citas/listado',         'Asesor\CitasController@ShowViewListado')       ->name('AsesorCitasListado');
// ----> Operaciones
Route::post("/asesor/ejercicios/play/{hash1}/{id}/{hash2}/{duration}/{hash3}/{size}/{hash4}", 'Asesor\EjerciciosController@RecibirParametros');


// --------------------- ADMINISTRADOR --------------------
Route::get('/admin/resumen',                'Admin\ResumenController@ShowView')             ->name('AdminResumen');
// ---->  Rutas
Route::get('/admin/empresas/listado',       'Admin\EmpresasController@ShowViewListado')     ->name('AdminEmpresasListado');
Route::get('/admin/empresas/ver/{id}',      'Admin\EmpresasController@ShowViewVer')         ->name('AdminEmpresasVer');
Route::get('/admin/empresas/crear',         'Admin\EmpresasController@ShowViewCrear')       ->name('AdminEmpresasCrear');
Route::get('/admin/empresas/editar/{id}',   'Admin\EmpresasController@ShowViewEditar')      ->name('AdminEmpresasEditar');
//--
Route::get('/admin/usuarios/listado',       'Admin\UsuariosController@ShowViewListado')     ->name('AdminUsuariosListado');
Route::get('/admin/usuarios/ver/{id}',      'Admin\UsuariosController@ShowViewVer')         ->name('AdminUsuariosVer');
Route::get('/admin/usuarios/crear',         'Admin\UsuariosController@ShowViewCrear')       ->name('AdminUsuariosCrear');
Route::get('/admin/usuarios/editar/{id}',   'Admin\UsuariosController@ShowViewEditar')      ->name('AdminUsuariosEditar');
// ----> Operaciones
Route::post('/admin/empresas/crear',        'Admin\EmpresasController@crear');
Route::put('/admin/empresas/editar/{id}',   'Admin\EmpresasController@editar');
// --
Route::post('/admin/usuarios/crear',        'Admin\UsuariosController@crear');
Route::put('/admin/usuarios/editar/{id}',   'Admin\UsuariosController@editar');


// --------------------- CLINICA --------------------
Route::get('/clinica/resumen',              'Clinica\ResumenController@ShowView')           ->name('ClinicaResumen');
// ---->  Rutas
Route::get('/clinica/usuarios/listado',     'Clinica\UsuariosController@ShowViewListado')   ->name('ClinicaUsuariosListado');
Route::get('/clinica/usuarios/ver/{id}',    'Clinica\UsuariosController@ShowViewVer')       ->name('ClinicaUsuariosVer');
Route::get('/clinica/usuarios/crear',       'Clinica\UsuariosController@ShowViewCrear')     ->name('ClinicaUsuariosCrear');
Route::get('/clinica/usuarios/editar/{id}', 'Clinica\UsuariosController@ShowViewEditar')    ->name('ClinicaUsuariosEditar');
// ----> Operaciones
Route::post('/clinica/usuarios/crear',      'Clinica\UsuariosController@crear');
Route::put('/clinica/usuarios/editar/{id}', 'Clinica\UsuariosController@editar');


