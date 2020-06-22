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
            {{ Form::open([ 'method' => 'PUT', 'onsubmit' => 'cargando()', 'url' => '/admin/empresas/editar/'.$empresa->id ])  }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0" for="nit">NIT:</label>
                            <input name="nit" type="text" value="{{ $empresa->nit }}" disabled class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0" for="nit">Nombre de la empresa</label>
                            <input required name="nombre" type="text" value="{{ $empresa->nit }}" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label  class="mb-0" for="nit">Dirección:</label>
                            <input required name="direccion" type="text" value="{{ $empresa->direccion }}" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0" for="nit">Email:</label>
                            <input required name="email" type="email" value="{{ $empresa->email }}" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0" for="nit">Teléfono:</label>
                            <input required name="telefono" type="text" value="{{ $empresa->telefono }}" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0" for="nit">Estado:</label>
                            <select required name="estado" id="estado" class="form-control form-control-sm">
                                <option value="AC" @if($empresa->estado == 'AC') selected @endif >ACTIVA</option>
                                <option value="IN" @if($empresa->estado == 'IN') selected @endif >INACTIVA</option>
                            </select>
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