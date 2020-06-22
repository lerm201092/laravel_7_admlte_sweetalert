@extends('layouts.admin')

@section('head')
<style>
    table > tbody > tr > td:first-child {
        width: 25%!important;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center px-1 py-4">
    <div class="col-md-12 card p-0">
        <div class="card-header">
            <p class="font-weight-bold mb-0">Infomación de empresa</p>
        </div>
        <div class="card-body px-1">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <table class="table table-sm table-striped table-bordered">
                        <tbody>
                            <tr><td><b>NIT:</b></td><td>{{ $empresa->nit }}</td></tr>
                            <tr><td><b>Nombre:</b></td><td>{{ $empresa->nombre }}</td></tr>
                            <tr><td><b>Dirección:</b></td><td>{{ $empresa->direccion }}</td></tr>
                            <tr><td><b>Email:</b></td><td>{{ $empresa->email }}</td></tr>
                            <tr><td><b>Telefono:</b></td><td>{{ $empresa->telefono }}</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <a href="{{ route('AdminEmpresasListado') }}" class="btn bg-base text-light btn-sm"><i class="fas fa-caret-left mr-2"></i>Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("#li-empresas a.nav-link").addClass("active");
</script>
@endsection