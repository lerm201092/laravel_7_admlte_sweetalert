<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        if( Auth::User()->rol == 1 ){ // Administrador
            return redirect("/admin/resumen");
        }

        if( Auth::User()->rol == 2 ){ // Asesor
            return redirect("/asesor/resumen");
        }

    }
}
