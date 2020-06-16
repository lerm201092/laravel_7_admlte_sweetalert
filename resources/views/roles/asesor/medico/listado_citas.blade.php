@extends('layouts.asesor')

@section('head')
<link href="{{ asset('vendor/calendar/core/main.css') }}" rel='stylesheet' />
<link href="{{ asset('vendor/calendar/daygrid/main.css') }}" rel='stylesheet' />
<link href="{{ asset('vendor/calendar/timegrid/main.css') }}" rel='stylesheet' />

<style>
.bg-verde{
background:#5eb562; 
}

.bg-amarillo{
background:#fc9208; 
}

.bg-rojo{
background:#ec4a47; 
}

.bg-azul{
background:#12b8cd; 
}

.bg-morado{
background:#9c27b0; 
}


.cl-verde{
color:#5eb562; 
}

.cl-amarillo{
color:#fc9208; 
}

.cl-rojo{
color:#ec4a47; 
}

.cl-azul{
color:#12b8cd; 
}

.cl-morado{
color:#9c27b0; 
}

.cl-morado-light{
            color:#a088a4; 
        }

ul.pagination{
float:right;
}

.alert-success{
color: #468847!important;
background-color: #dff0d8!important;
border-color: #d6e9c6!important;
}   
ul#tabs-ver .nav-item .nav-link{
            font-weight:400;
            color: #aba8a8!important;
          }
ul#tabs-ver  .nav-item .active{
   font-weight:600;
    color: #da1c5c!important;
  }

  .bg-verde{
    background:#5eb562; 
}

.bg-amarillo{
    background:#fc9208; 
}

.bg-rojo{
    background:#ec4a47; 
}

.bg-azul{
    background:#12b8cd; 
}

.bg-morado{
    background:#9c27b0; 
}


.cl-verde{
    color:#5eb562; 
}

.cl-amarillo{
    color:#fc9208; 
}

.cl-rojo{
    color:#ec4a47; 
}

.cl-azul{
    color:#12b8cd; 
}

.cl-morado{
    color:#9c27b0; 
}

.mat-label {
    display: block;
    font-size: 14px;
    font-weight:450!important;
    transform: translateY(25px);
    color: gray;
    transition: all 0.2s;
  }
  .mat-input {
    position: relative;
    background: transparent;
    width: 100%;
    border: none;
    outline: none;
    padding: 2px 0;
    font-size: 16px;
    border-bottom: 1px solid #e4e4e4;
  }
  
    
  .mat-div {
    padding: 10px 0 0 0;  
    position: relative;
  }
  
  .mat-div:after, .mat-div:before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 2px;
    background-color: #e2e2e2; 
    bottom: 0;
    left: 0;
    transition: all 0.2s;
  }
  
  .mat-div::after {
    background-color: #8E8DBE;
    transform: scaleX(0);
  }
  
  .is-active::after {
    transform: scaleX(1);
  }
  
  .is-active .mat-label {
    color: #8E8DBE;
  }
  
  .is-completed .mat-label {
    font-size: 13px;
    transform: translateY(0);
  }

  .fc-toolbar h2 {
    font-size: 15px!important;
    text-transform: capitalize;
}

.fc-button-primary {
    color: #fff;
    background-color: #789daf!important;
    border-color: #789daf!important;
}

.fc-button-primary:not(:disabled):active, .fc-button-primary:not(:disabled).fc-button-active {
    color: #fff;
    background-color: #a2a9ad!important;
    border-color: #a2a9ad!important;
}

.fc-event, .fc-event-dot {
    background-color: #d65d86!important;
    border-color: #d65d86!important;
    cursor: pointer;
}

.fc-time{
    font-size: 11px!important;
    color: white;
}

.fc-title{
    font-size: 9px!important;
    color: white;
}

.fc-view, .fc-view > table {
    border: 1px solid rgba(51, 51, 51, 0.07)!important;
}

.fc-center{
    margin: 20px auto 20px;
}

@media (max-width: 600px) {
    #contenedor_principal{
        padding: 5px 5px!important;
    }

}

a#li-medico.active{
    background: #9c27b0!important;
}

</style>
@endsection

@section('content')
<div class="row px-4 mt-3" id="contenedor_principal">
        <div class="col-12 card px-0">
            <div class="card-header">
                <p class="font-weight-bold mb-0">Listado de citas medicas</p>
            </div>
            <div class="card-body">
                    <!-- link de los tabs -->
                    <div class="row justify-content-end">
                        <a href="javascript:void(0)" class="btn bg-verde text-light font-weight-bold float-right mx-1"><span class="fa fa-calendar-plus mr-2"></span>Crear Cita</a>  
                    </div>
                    <ul class="nav nav-tabs" role="tablist" id="tabs-ver"> 
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1">
                                <span class="fas fa-address-card mr-2"></span>
                                <span class="text-tab">Listado</span>
                            </a>
                        </li>
                        <li class="nav-item d-none d-sm-none d-md-block">
                            <a class="nav-link" data-toggle="tab" href="#tab2">
                                <span class="fas fa-briefcase-medical mr-2"></span>
                                <span id="open-calendar"></span>
                                <span class="text-tab">Calendario</span>
                            </a>
                        </li>
                    </ul>

                    <!-- contenedor de los tabs -->
                    <div class="tab-content p-0" style="border:1px solid #dee2e6; border-top: none">
                        <!-- PRIMER TAB -->
                        <div class="tab-pane active p-4" id="tab1">
                            <table id="tbl-pacientes" class="table table-sm table-striped table-bordered">
                                <thead class="text-primary">
                                    <th class="d-none d-sm-none d-md-block">Id Paciente</th>
                                    <th>Paciente</th>
                                    <th>Fecha de Inicio</th>
                                    <th></th>
                                </thead>
                                <tbody id="tbody_pacientes">

                                </tbody>
                            </table>

                            <div class="row">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled" id="li-primero" title="Primero"><a class="page-link" href="javascript:primero()"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item disabled" id="li-anterior" title="Anterior"><a class="page-link" href="javascript:anterior()"><i class="fas fa-angle-left"></i></a></li>

                                    <li class="page-item disabled " id="li-anterior" title="Pagina Actual"><a class="page-link" href="#"><span id="item-act">1</span></a></li>
                                    <li class="page-item disabled "><a class="page-link" href="#">/</a></li>
                                    <li class="page-item disabled " id="li-anterior" title="Cantidad de paginas"><a class="page-link" href="#"><span id="item-max">1</span></a></li>

                                    <li class="page-item disabled" id="li-siguiente" title="Siguiente"><a class="page-link" href="javascript:siguiente()"><i class="fas fa-angle-right"></i></a></li>
                                    <li class="page-item disabled" id="li-ultimo" title="Ultimo"><a class="page-link" href="javascript:ultimo()"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>


                        <!-- SEGUNDO TAB -->
                        <div class="tab-pane container active" id="tab2">
                            <div class="row justify-content-center">                                
                                <div class="col-md-8">
                                    <div id='calendar'></div>                                                 
                                </div>
                            </div>                         
                        </div>
                    </div>
                </div>
                <!-- FIN DEL CARD BODY -->
        </div>
    </div>
@endsection


@section('script')
<script src="{{ asset('vendor/calendar/core/main.js') }}"></script>
<script src="{{ asset('vendor/calendar/core/locales-all.js') }}"></script>
<script src="{{ asset('vendor/calendar/interaction/main.js') }}"></script>
<script src="{{ asset('vendor/calendar/daygrid/main.js') }}"></script>
<script src="{{ asset('vendor/calendar/timegrid/main.js') }}"></script>

<script>
    $("#li-medicos a.nav-link").addClass("active");
    $("#li-anterior").addClass("disabled");
    $("#li-primero").addClass("disabled");

    $(".mat-input").focus(function(){
    $(this).parent().addClass("is-active is-completed");
  });

  $(".mat-input").focusout(function(){
    if($(this).val() === "")
      $(this).parent().removeClass("is-completed");
      $(this).parent().removeClass("is-active");
    });

    function cargando(){
        swal('Cargando, espere un momento por favor ... ', {
            closeOnClickOutside: false,
            buttons: false,
            content: {
                element: "img",
                attributes: {
                title: "cargando",
                src: "/apps/img/cargando.gif",
                style: "width:25px; margin-bottom:20px;"
                },
            },
        });
    }

    listar_pacientes();

    function listar_pacientes(){
            var html = "", array = [
                { id : '(TI) 1192901257', title :  'Maria Polo', start : '2020-02-01 17:03:53', fecha : '2020-02-01 17:03:53'},
                { id : '(RC) 1044222002', title :  'Duber Mejia', start : '2020-02-06 17:03:53', fecha : '2020-02-06 17:03:53'},
                { id : '(CE) 1067617759', title :  'Yoselin Berrio', start : '2020-02-15 17:03:53', fecha : '2020-02-15 17:03:53'},
                { id : '(RC) 1038813915', title :  'Maria Jose Romero', start : '2020-02-13 17:03:53', fecha : '2020-02-13 17:03:53'},
                { id : '(CC) 1080435716', title :  'Omar Fontalvo', start : '2020-02-12 17:03:53', fecha : '2020-02-12 17:03:53'},
                { id : '(RC) 1080542410', title :  'Maicol Ricardo', start : '2020-02-22 17:03:53', fecha : '2020-02-22 17:03:53'},
                { id : '(RC) 1043172032', title :  'Keiner Potes', start : '2020-02-23 17:03:53', fecha : '2020-02-23 17:03:53'}
            ];

            console.log(array);
            for(var i=0; i < array.length; i++){
                html+="<tr>";
                html+="<td>"+array[i].id+"</td>";
                html+="<td>"+array[i].title+"</td>";
                html+="<td>"+array[i].start+"</td>";
                html+="<td class='pl-3'>";
                    html+="<a href='javascript:void(0)' class='btn btn-sm text-info mx-1' title='Ver Paciente'><i class='fas fa-eye'></i></a>";
                    html+="<a href='javascript:void(0)' class='btn btn-sm text-warning mx-1' title='Editar Paciente' class='ml-2'><i class='fas fa-user-edit'></i></a>";
                    html+="<a href='javascript:void(0)' class='btn btn-sm text-danger mx-1' title='Iniciar Consulta' class='ml-2'><i class='fas fa-angle-double-right'></i></a>";
                html+="</td>";
                html+="</tr>";
            }

            cargarCalendario(array);
            $("#tbody_pacientes").html("");
            $("#tbody_pacientes").html(html);


    }

    // **********************************************************************************

    $("#buscar").focus();
    $("#li-medico").addClass("active");

    // $("#tab2").addClass("d-none");
    // $("#tab1").addClass("d-none");

    function filtro_estado(aux){
        $(".activeItem").removeClass("d-none"); 
        $(".inactiveItem").removeClass("d-none"); 
        if(aux=="I"){
            $(".activeItem").addClass("d-none"); 
        }else if(aux=="A"){
            $(".inactiveItem").addClass("d-none"); 
        }
    }   
      
    function cargarCalendario(arr){
        $("#calendar").html("");
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'es',
        plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        eventClick: function(info) {
            verCitaCalendario(info);
            info.el.style.borderColor = 'red';
        },
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        events: arr
        });
        calendar.render();

        $("#tab2").removeClass("active");
    }

    function verCitaCalendario(info){
        swal("GoVista", "Paciente : "+info.event._def.title+"\nFecha : "+info.event._def.start, 'info');
        const wrapper = document.createElement('p');
        wrapper.innerHTML = "<p><b>Paciente : </b>"+info.event._def.title+"</p><p><b>Fecha : </b>"+info.event.extendedProps.fecha+"</p>";
        swal({
            title: "Datos Cita",
            content: wrapper, 
            icon: "info"
        });
    }

    function capitalize(string){
        if(string){
            string = string.toLowerCase();
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
        return '';
    }
    </script>
@endsection