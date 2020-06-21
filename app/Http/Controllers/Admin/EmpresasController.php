<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ShowViewListado($page = 1){
        return $page;
    }
}
