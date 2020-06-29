<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Model\Areas;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/municipios/{id_dpto}', function($id_dpto){
    return Areas::select('id', 'nomarea')->where('id_tipo', '3')->where('padre', $id_dpto)->orderBy('nomarea')->get();
})->name('apiMuni');
