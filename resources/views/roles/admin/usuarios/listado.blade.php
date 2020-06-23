@extends('layouts.admin')

@section('head')
<style>
    td > form > a.btn-sm, td > form > button.btn-sm {
        height: 20px;
        width: 22px;
        font-size: 10px;
        line-height: 19px;
        padding: 0px;
    }
    
</style>
@endsection


@section('content')
<div class="row justify-content-center px-1 py-4">
    <div class="col-md-12 card p-0">
        <div class="card-header">
            <p class="font-weight-bold mb-0">Listado de ejercicios</p>
        </div>
        <div class="card-body">
            @if(Request::get('search'))
            <div class="row">
                <div class="col-12 p-0">
                    <p><b>Busqueda realizada:</b> "{{ Request::get('search') }}" </p>
                </div>
            </div>
            @endif

            <div class="row mb-3">
                <div class="col-3 p-0">
                    <a href="{{ route('AdminUsuariosCrear') }}" class="btn btn-sm btn-success btn-round btn-just-icon" title="Crear Nueva Empresa">
                        <i class="fas fa-plus text-xs mr-2"></i> <b>Nuevo</b>
                    </a>
                </div>
                <div class="col-9 p-0">
                    {{ Form::open(['method' => 'GET', 'onsubmit' => 'cargando()', 'url' => '/admin/usuarios/listado', 'class'=>'float-right', 'role' => 'search'])  }}
                    <div class="input-group">
                        <input type="text" style="max-width:200px" class="form-control form-control-sm" name="search" placeholder="Buscar..." value="{{ Request::get('search') ?? '' }}">
                        <button type="submit" class="btn btn-sm btn-info text-light btn-round btn-just-icon">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="{{ route('AdminUsuariosListado') }}" class="ml-1 btn btn-sm btn-danger"><i class="fas fa-eraser"></i></a>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

            <div class="row">
                <table id="tbl-pacientes" class="table table-sm table-striped table-bordered">
                    <thead class="text-primary">
                        <th class="d-none d-md-table-cell">ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th class="d-none d-md-table-cell">Email</th>
                        <th class="d-none d-md-table-cell">Rol</th>
                        <th class="d-none d-md-table-cell">Estado</th>
                        <th class="text-center">Acción</th>
                    </thead>
                    <tbody id="tbody_historias">
                        @if( count($usuarios) > 0 )
                            @foreach( $usuarios as $reg )
                            <tr>
                                <td class="d-none d-md-table-cell">( {{ $reg->tipoid }} ) {{ $reg->numid }}</td>
                                <td>{{ strtoupper($reg->nombre) }}</td>
                                <td>{{ strtoupper($reg->apellido) }}</td>
                                <td class="d-none d-md-table-cell">{{ $reg->email }}</td>
                                <td class="d-none d-md-table-cell">{{ $reg->rol_user }}</td>
                                <td class="d-none d-md-table-cell">@if( $reg->estado == "AC" ) Activa @else Inactiva @endif</td>
                                <td class="text-center">

                                    {{ Form::open(['method' => 'PUT', 'onsubmit' => 'cargando()', 'url' => '/admin/empresas/editar/'.$reg->id ])  }}
                                        <a title="Ver Empresa" class="btn btn-sm btn-info text-light" href="{{ route('AdminUsuariosVer', $reg->id ) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a title="Editar Empresa" class="btn btn-sm btn-warning" href="{{ route('AdminUsuariosEditar', $reg->id ) }}">
                                            <i class="fas fa-wrench"></i>
                                        </a>
                                        @csrf
                                        @if( $reg->estado == "AC" )
                                            <input type="hidden" name="estado" value="IN" />
                                            <button title="Inactivar Empresa" class="btn btn-sm btn-danger">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        @else
                                            <input type="hidden" name="estado" value="AC" />
                                            <button title="Activar Empresa" class="btn btn-sm btn-success">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        @endif
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="7">No hay registros</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="pagination-wrapper">
                    {{ $usuarios->appends(['search' => Request::get('search')])->render() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("#li-usuarios a.nav-link").addClass("active");
    function cargando(){
        swal('Cargando, espere un momento por favor ... ', {
            closeOnClickOutside: false,
            buttons: false,
            content: {
                element: "img",
                attributes: {
                title: "cargando",
                src: "/img/cargando.gif",
                style: "width:25px; margin-bottom:20px;"
                },
            },
        });
    }
</script>
@endsection