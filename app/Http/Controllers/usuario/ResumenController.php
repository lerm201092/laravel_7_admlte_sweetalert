<?php

namespace App\Http\Controllers\Clinica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Model\Empresas;
Use App\Model\Citas;
Use App\User;

class ResumenController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('rol_clinica');
    }

    public function ShowView(){
        return view('roles.clinica.resumen')
        ->with( "cantMedicos",     User::where('rol', 'ME')->count() )
        ->with( "medicosAct",      User::where('rol', 'ME')->where('estado', 'AC')->count() )
        ->with( "cantPacientes",   User::where('rol', 'PA')->count() )
        ->with( "pacientesAct",    User::where('rol', 'PA')->where('estado', 'AC')->count() )
        ->with( "cantCitas",       Citas::all()->count() )
        ->with( "citasAct",        Citas::where('estado', 'AC')->count() )
        ->with( "cantEjercicios",     Citas::where('estado', 'AC')->count() )
        ->with( "ejerciciosAct",      User::where('rol', 'US')->where('estado', 'AC')->count() );

    }

}
