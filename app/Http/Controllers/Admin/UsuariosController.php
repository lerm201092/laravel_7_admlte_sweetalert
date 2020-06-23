<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\User;
use App\Model\Roles;
use App\Model\Areas;

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
                ->with('js_rol',   Config::get('constantes.rol_user')   )
                ->with('js_muni',   Areas::select('id','nomarea')->where('id_tipo', '3')->where('padre', $usuario->dpto)->orderBy('nomarea')->get() )
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
}
