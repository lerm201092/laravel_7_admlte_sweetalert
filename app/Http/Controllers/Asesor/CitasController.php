<?php

namespace App\Http\Controllers\Asesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('rol_asesor');
    }

    public function ShowViewListado(){
        return view('roles.asesor.medico.listado_citas');
    }
}
