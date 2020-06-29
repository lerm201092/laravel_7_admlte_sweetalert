<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Model\Roles;
use App\Model\Areas;
use App\Model\Empresas;

use Auth;

class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ShowViewVer($id){
        $usuario = User::findOrFail($id);        
        $dpto_user = Areas::where('id', $usuario->id_area )->first();
        $usuario->dpto = $dpto_user->padre;
        return view('roles.admin.usuarios.ver', compact('usuario'))
                ->with('js_estado', Config::get('constantes.estado') )
                ->with('js_tipoid', Config::get('constantes.tipo_documento') )
                ->with('js_sexo',   Config::get('constantes.sexo')   )
                ->with('js_rol',   Config::get('constantes.rol_user')   )
                ->with('js_clinica',   Empresas::where('estado', 'AC')->get()   )
                ->with('js_muni',   Areas::select('id','nomarea')->where('id_tipo', '3')->where('padre', $usuario->dpto)->orderBy('nomarea')->get() )
                ->with('js_dpto',   Areas::select('id','nomarea')->where('id_tipo', '2')->orderBy('nomarea')->get()  );
    
    }

    
    public function ShowViewEditar($id){
        $usuario = User::findOrFail($id);        
        $dpto_user = Areas::where('id', $usuario->id_area )->first();
        $usuario->dpto = $dpto_user->padre;
        return view('roles.admin.usuarios.editar', compact('usuario'))
                ->with('js_estado', Config::get('constantes.estado') )
                ->with('js_tipoid', Config::get('constantes.tipo_documento') )
                ->with('js_sexo',   Config::get('constantes.sexo')   )
                ->with('js_rol',   Config::get('constantes.rol_admin')   )
                ->with('js_clinica',   Empresas::where('estado', 'AC')->get()   )
                ->with('js_muni',   Areas::select('id','nomarea')->where('id_tipo', '3')->where('padre', $usuario->dpto)->orderBy('nomarea')->get() )
                ->with('js_dpto',   Areas::select('id','nomarea')->where('id_tipo', '2')->orderBy('nomarea')->get()  );
    }
    
    public function ShowViewCrear(){
        return view('roles.admin.usuarios.crear')
                ->with('js_estado', Config::get('constantes.estado') )
                ->with('js_tipoid', Config::get('constantes.tipo_documento') )
                ->with('js_sexo',   Config::get('constantes.sexo')   )
                ->with('js_rol',   Config::get('constantes.rol_admin')   )
                ->with('js_clinica',   Empresas::where('estado', 'AC')->get()   )
                ->with('js_dpto',   Areas::select('id','nomarea')->where('id_tipo', '2')->orderBy('nomarea')->get()  );
    }

    public function ShowViewListado(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $usuarios = User::from('users as u')
                ->select('u.*', 'r.descripcion as rol_user')
                ->leftJoin('roles as r', 'u.rol', '=', 'r.id')
                ->whereIn('u.rol',  array('AS', 'AD', 'AC'))
                ->where(function ($q) use ($keyword) {
                    $q->where('u.id', 'LIKE', "%$keyword%")
                        ->orWhere('u.tipoid', 'LIKE', "%$keyword%")
                        ->orWhere('u.numid', 'LIKE', "%$keyword%")
                        ->orWhere('u.nombre', 'LIKE', "%$keyword%")
                        ->orWhere('u.apellido', 'LIKE', "%$keyword%");
                })->paginate($perPage);
        } else {
            $usuarios = User::from('users as u')
                ->select('u.*', 'r.descripcion as rol_user')
                ->leftJoin('roles as r', 'u.rol', '=', 'r.id')
                ->whereIn('u.rol',  array('AS', 'AD', 'AC'))
                ->paginate($perPage);
        }

        return view('roles.admin.usuarios.listado', compact('usuarios'));
    }
	
	public function crear(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:users',
			'password' => 'required',
			'password2' => 'required|same:password|min:8|max:10',
			'numid' => 'unique:users,numid,NULL,id,tipoid,'.$request->tipoid,
        ], self::messages());	

        if ($validator->fails()) {
            alert()->warning('Complete los campos actualizados','GoVista S.A.S.')->persistent('OK');
            return back()->withInput()->withErrors($validator);
        }

        $requestData = $request->all();
        $requestData['password'] =  Hash::make($request->password);

        user::create($requestData);
        alert()->success('Usuario Registrado','GoVista S.A.S.')->persistent('OK');
        return redirect( route('AdminUsuariosListado') );
    }

    public function editar($id, Request $request){  

        

        $validator = Validator::make($request->all(), [
            'email' =>      [ 'email' , Rule::unique('users')->ignore($request->id), ],
            'numid' =>      Rule::unique('users')->where('numid', $request->numid)->where('tipoid', $request->tipoid)->ignore( $request->id ),
        ], self::messages());   

        $requestData = $request->all();

        if( isset( $requestData['rol'] ) ){
            if( $requestData['rol'] != 'AC'){ $requestData['id_empresa'] = 1; }
        }

        if( isset( $requestData['password'] ) ){
            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'password2' => 'required|same:password|min:8|max:10',
            ], self::messages()); 
            $requestData['password'] =  Hash::make($request->password);
        }

        if ($validator->fails()) {
            alert()->warning('Complete los campos actualizados','GoVista S.A.S.')->persistent('OK');
            return back()->withInput()->withErrors($validator);
        }

        $usuario = User::findOrFail($id);

        return $requestData;
        $usuario = $usuario->update($requestData);
        alert()->success('Datos actualizados','GoVista S.A.S.')->persistent('OK');
        return redirect( route('AdminUsuariosListado') );

    }
	
	static function messages(){
        return [
            'email.unique' => 'El Correo que intenta ingresar ya ha sido registrado',
			'password.same' => 'Contraseñas no coinciden',
			'password2.same' => 'Contraseñas no coinciden',
			'password2.min' => 'Debe tener entre 8 y 10 caracteres',
			'password2.max' => 'Debe tener entre 8 y 10 caracteres',
			'numid.unique' => 'Identificación ya ha sido registrada',
        ];
    }
}
