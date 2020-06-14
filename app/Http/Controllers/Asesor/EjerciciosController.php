<?php

namespace App\Http\Controllers\Asesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EjerciciosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function ShowViewListado(){
        return view('roles.asesor.ejercicios.listado')->with("valor", "Hola mundo");
    }
}
