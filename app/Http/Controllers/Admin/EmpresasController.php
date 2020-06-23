<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Empresas;

use Auth;

class EmpresasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rol_admin');
        
    }

    public function validar(){
        return Auth::user();
    }

    public function ShowViewCrear(){
        return view('roles.admin.empresas.crear');
    }

    public function ShowViewListado(Request $request){
    	$keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $empresas = Empresas::where('id', 'LIKE', "%$keyword%")
                ->orWhere('nit', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $empresas = Empresas::paginate($perPage);
        }

        return view('roles.admin.empresas.listado', compact('empresas'));
    }

    public function ShowViewVer($id){
        $empresa = Empresas::findOrFail($id);
        return view('roles.admin.empresas.ver', compact('empresa'));
    }

    public function ShowViewEditar($id){
        $empresa = Empresas::findOrFail($id);
        return view('roles.admin.empresas.editar', compact('empresa'));
    }

    public function editar($id, Request $request){	
    	$requestData = $request->all();
    	$empresa = Empresas::findOrFail($id);
    	$empresa = $empresa->update($requestData);
    	alert()->success('Datos actualizados','GoVista S.A.S.')->persistent('OK');
    	return redirect( route('AdminEmpresasListado') );

    }

    public function crear(Request $request){
        $validator = Validator::make($request->all(), [
            'nit' => 'required|unique:empresas'
        ], self::messages());	

        if ($validator->fails()) {
            alert()->success('Datos actualizados','GoVista S.A.S.')->persistent('OK');
            return back()->withErrors($validator)
                        ->withInput();
        }

        $requestData = $request->all();
        Empresas::create($requestData);
        alert()->success('Empresa  actualizados','GoVista S.A.S.')->persistent('OK');
        return redirect( route('AdminEmpresasListado') );
    }


    static function messages(){
        return [
            'nit.unique' => 'El NIT que intenta ingresar ya ha sido registrado'
        ];
    }
}