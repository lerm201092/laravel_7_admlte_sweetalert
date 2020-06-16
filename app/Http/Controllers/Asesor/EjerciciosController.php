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
        return view('roles.asesor.ejercicios.listado');
    }

    public function RecibirParametros($hash1, $id, $hash2, $duration, $hash3, $size, $hash4){
        return view("roles.asesor.ejercicios.play")
        ->with("id",        $id       )
        ->with("duration",  $duration )
        ->with("size",      $size     );
    }
}
