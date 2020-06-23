<?php

namespace App\Http\Controllers\Asesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumenController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('rol_asesor');
    }

    public function ShowView(){
        return view('roles.asesor.resumen')->with("valor", "Hola mundo");
    }

}
