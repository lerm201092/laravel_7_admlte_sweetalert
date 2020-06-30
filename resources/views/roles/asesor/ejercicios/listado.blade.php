@extends('layouts.asesor')

@section('name')
    <style>
        .btn-play {
        
    }
    </style>
@endsection

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
$("#li-ejercicios a.nav-link").addClass("active");
listar();
function listar(){
    var html = "", array = [
            { id : '1', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #1', session : '3', session_ok : '3', duration : '1' },
            { id : '2', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #2', session : '2', session_ok : '1', duration : '2' },
            { id : '3', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #3', session : '2', session_ok : '1', duration : '1' },
            { id : '4', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #4', session : '3', session_ok : '1', duration : '3' },
            { id : '5', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #5', session : '2', session_ok : '1', duration : '1' },
            { id : '6', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #6', session : '1', session_ok : '1', duration : '2' },
        
            { id : '7', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #7', session : '3', session_ok : '3', duration : '1' },
            { id : '8', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #8', session : '2', session_ok : '1', duration : '2' },
            { id : '9', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #9', session : '2', session_ok : '1', duration : '1' },
            { id : '10', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #10', session : '3', session_ok : '1', duration : '3' },
            { id : '11', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #11', session : '2', session_ok : '1', duration : '1' },
            { id : '12', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #12', session : '1', session_ok : '1', duration : '2' },
            { id : '13', fecha : '2020-01-29 12:01 pm', name : 'Ian Ramos', observacion : 'Ejercicio #13', session : '1', session_ok : '1', duration : '2' }
    ];

        for(var i=0; i < array.length; i++){
            html+="<tr>";
            html+="<td class='d-none d-md-table-cell'>"+array[i].id+"</td>";     
            html+="<td class='d-none d-md-table-cell'>"+array[i].observacion+"</td>";
            html+="<td class='d-none d-md-table-cell'>"+array[i].session+"</td>";
            html+="<td class='d-none d-md-table-cell'>"+(array[i].session_ok ? array[i].session_ok : 0 )+"</td>";
            html+="<td class='d-none d-md-table-cell'>"+array[i].duration+"</td>";
            html+="<td>";

            <?php 
                $hash1 = str_ireplace("/", "", password_hash('govista', PASSWORD_DEFAULT)); 
                $hash2 = str_ireplace("/", "", password_hash('2020', PASSWORD_DEFAULT));
                $hash3 = str_ireplace("/", "", password_hash('SENA', PASSWORD_DEFAULT));
            ?>

                html+= `<form method='POST' action='/asesor/ejercicios/play/{{ $hash1 }}/`+array[i].id+`/{{ $hash2 }}/`+array[i].duration+`/{{ $hash3 }}/2/{{ $hash3 }}'>
                            @csrf 
                            <button type='submit' class='btn btn-sm bg-verde mx-1' style='height: 20px!important;
                                                                                            width:  22px!important;
                                                                                            font-size: 10px;
                                                                                            line-height: 19px;
        padding: 0px;'><i class='text-light fas fa-play-circle'></i></button>
                        </form>`;
            html+="</td>";
            html+="</tr>";
        }
        $("#tbody_historias").html("");
        $("#tbody_historias").html(html);
}

</script>
@endsection