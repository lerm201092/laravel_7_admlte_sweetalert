@extends('layouts.admin')

@section('head')
<style>
    table>tbody>tr>td:first-child {
        width: 25% !important;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center px-1 py-4">
    <div class="col-md-12 card p-0">
        <div class="card-header">
            <p class="font-weight-bold mb-0">Información de empresa</p>
        </div>
        <div class="card-body px-4">
            {{ Form::open([ 'method' => 'PUT', 'onsubmit' => 'cargando()', 'url' => '/admin/empresas/editar/'.$usuario->id ])  }}
            <div class="row">
                <div class="col-12">
                <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Usuario</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="tipoid">Tipo Id: </label>
                        {{ Form::select('tipoid', $js_tipoid, $usuario->tipoid, ['class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="numid">Identificación: </label>
                        {!! Form::text('numid', $usuario->numid, ['class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Genero:</label>
                        {{ Form::select('estado', $js_sexo, $usuario->sexo, ['class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Nombre: </label>
                        <input required name="nombre" type="text" value="{{ $usuario->nombre }}" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Apellido:</label>
                        <input required name="direccion" type="text" value="{{ $usuario->apellido }}" class="form-control form-control-sm">
                    </div>
                </div>


                <div class="col-12 mt-5">
                <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Contacto</p>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Email:</label>
                        <input required name="email" type="email" value="{{ $usuario->email }}" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Teléfono:</label>
                        <input required name="telefono" type="text" value="{{ $usuario->telefono }}" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Dirección:</label>
                        <input required name="telefono" type="text" value="{{ $usuario->direccion }}" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="dpto">Departamento:</label>
                        <select name='dpto' class="form-control form-control-sm">
                            @foreach ($js_dpto as $dpto)
                            <option value='{{ $dpto->id }}' @if($dpto->id == $usuario->dpto) selected @endif>{{ $dpto->nomarea }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="id_area">Ciudad:</label>
                        <select name='id_area' class="form-control form-control-sm">
                            @foreach ($js_muni as $muni)
                            <option value='{{ $muni->id }}' @if($muni->id == $usuario->id_area) selected @endif>{{ $muni->nomarea }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Aplicación</p>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Estado:</label>
                        {{ Form::select('estado', $js_estado, $usuario->estado, ['class' => 'form-control form-control-sm']) }}
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <a href="{{ route('AdminEmpresasListado') }}" class="btn bg-secondary text-light btn-sm"><i class="fas fa-caret-left mr-2"></i>Regresar</a>
                    <button class="btn bg-base text-light btn-sm"><i class="fas fa-save mr-2"></i>Guardar</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("#li-empresas a.nav-link").addClass("active");

    function cargando() {
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