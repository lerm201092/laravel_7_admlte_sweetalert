<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Model\Empresas;
Use App\Model\Citas;
Use App\User;

use App\Http\Requests;

class ResumenController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('rol_admin');
    }

    public function ShowView(){
        // return  Empresas::where('estado', 'AC')->count();
        return view('roles.admin.resumen')
        ->with( "cantEmpresas",     Empresas::all()->count() )
        ->with( "empresasAct",      Empresas::where('estado', 'AC')->count() )
        ->with( "asesoresAct",      User::where('rol', 'AS')->where('estado', 'AC')->count() )
        ->with( "pacientesAct",     User::where('rol', 'PA')->where('estado', 'AC')->count() )
        ->with( "medicosAct",       User::where('rol', 'ME')->where('estado', 'AC')->count() )
        ->with( "cantCitas",        Citas::all()->count() )
        ->with( "citasActivas",     Citas::where('estado', 'AC')->count() )
        ->with( "usuariosAct",      User::where('rol', 'US')->where('estado', 'AC')->count() );

    }

}
