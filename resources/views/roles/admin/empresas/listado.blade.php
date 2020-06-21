@extends('layouts.admin')

@section('content') 
<div class="row justify-content-center px-3 mt-4">
    <div class="col-md-12 card p-0">
        <div class="card-header">
            <p class="font-weight-bold mb-0">Listado de ejercicios</p>
        </div>
        <div class="card-body">
            <table id="tbl-pacientes" class="table table-sm table-striped table-bordered">
                <thead class="text-primary">
                    <th class="d-none d-md-table-cell">Código</th>
                    <th class="d-none d-md-table-cell">Observación</th>
                    <th class="d-none d-md-table-cell">Sesiones</th>
                    <th class="d-none d-md-table-cell">Realizadas</th>
                    <th class="d-none d-md-table-cell">Duración (min)</th>
                    <th></th>
                </thead>
                <tbody id="tbody_historias">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script') 
<script>

</script>
@endsection 