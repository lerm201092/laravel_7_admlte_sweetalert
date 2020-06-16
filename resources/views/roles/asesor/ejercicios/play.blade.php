@extends('layouts.asesor')

@section('head') 
<script src="/js/app.js"></script>
<?php     

    $name_ejer = ['Agudeza visual', 'Agudeza visual', 'Agudeza visual', 'Agudeza visual', 'Agudeza visual', 
    'Acomodación', 'Movimientos sacádicos', 'Movimientos sacádicos', 'Movimiento de seguimiento', 
    'Memoria Visual', 'Biocular', 'Binocular', '3D'];

?>
<link href="{{ asset('juegos/juegos/exercise-'.$id.'/TemplateData/style.css') }}" rel="stylesheet">
<script src="{{ asset('juegos/juegos/exercise-'.$id.'/TemplateData/UnityProgress.js') }}"></script>
<script src="{{ asset('juegos/juegos/exercise-'.$id.'/Build/UnityLoader.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#li-ejercicios").addClass("active");
    });
    var gameInstance;
    cargar_juego();
    function cargar_juego(){
        var ruta = "{{ asset('juegos/juegos/exercise-'.$id.'/Build/exercise-'.$id.'.json') }}";
        gameInstance = UnityLoader.instantiate("gameContainer", ruta);
    }


</script>
<script>


    function SetData() {
        gameInstance.SendMessage('MinigameHUD', 'SetUserName', "{{ Auth::user()->name }}");
        gameInstance.SendMessage('MinigameHUD', 'SetId', {{ $id }} );
        gameInstance.SendMessage('MinigameHUD', 'SetIdHis',  {{ $id }} );
        gameInstance.SendMessage('MinigameHUD', 'SetDuration', {{ $duration }} );
        gameInstance.SendMessage('MinigameHUD', 'SetSize', {{ $size }} );
        gameInstance.SendMessage('MinigameHUD', 'SetLeft', "");
        gameInstance.SendMessage('MinigameHUD', 'SetRight', "");
        gameInstance.SendMessage('MinigameHUD', 'SetAge', 0);
        gameInstance.SendMessage('MinigameHUD', 'SetStatus', "AC" );
        gameInstance.SendMessage('MinigameHUD', 'SetReturnUrl', "{{ route('AsesorEjerciciosListado') }}");//url a la cual volver cuando se termine el juego o el jugador se salga por el menu de pause
        gameInstance.SendMessage('MinigameHUD', 'SetSnellenValues',"-");//en caso de que se quieran sobreescribir los valores de la tabla de snellen, si no dejar asi
        gameInstance.SendMessage('MinigameHUD', 'SetPlayDistance',0);//en caso de que se quiera cambiar la distancia de juego por defecto, actualmente 1m, si no dejar asi
        gameInstance.SendMessage('MinigameHUD', 'SetCoins', 0);//monedas ganadas por el jugador, acciones acertadas
        gameInstance.SendMessage('MinigameHUD', 'SetStars', 0);//estrellas ganadas por el jugador, juegos completados exitosamente
    }

    var isAjaxState = false;
    
    function SaveData(id, id_history, duration, Failure, Progress, status_game, coins, stars){
        // swal("Govista", "Aciertos: "+Progress+", Fallos: "+Failure, "info");
        console.log(id);
    }

    function ForceSave() { 
        // Intento de que al jugador cerrar el navegador primero guarde los datos de juego, no estoy seguro de si esta funcionando correctamten igual es opcional
        if (!isAjaxState) {
        gameInstance.SendMessage('MinigameHUD','ForceSave');
        }
    }

    window.onbeforeunload = function() { 
        // Funciona con el metodo de arriba		    
        if (!isAjaxState) {
        ForceSave();
        }
        return "asd";
    }
    
</script>
@endsection

@section('content') 
<div class="row mt-3 justify-content-center">
    <div class="col-md-10">
        <div class="card p-4">                    
            <div id="contenedor" class="container">
                <p style="color :#869099; font-weight:600; font-size: 19px;">Ejercicio # {{ $id ?? '' }} - Duración {{ $duration ?? '' }} Min. - <?=($name_ejer[ $id  - 1])?></p>
                <div class="row">
                    <div class="col-12">
                        <div class="panel-body text-canteer">
                            <div id="gameContainer" style="width:100%; height: auto;"></div>
                        </div>
                    </div>
                </div>
                <div class="row pb-4 pl-4">
                    <a href="/apps/rol-asesor/ejercicios/listado" class="btn bg-morado text-light"><span class="fas fa-caret-left mr-2"></span>Regresar</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script') 
<script>
$("#li-ejercicios a.nav-link").addClass("active");
</script>
@endsection