@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/chartist/chartist.min.css') }}">
@endsection

@section('content')
<div class="row mt-4">
           <x-card-resumen bg="bg-verde" icon="fas fa-building" title="Empresas Registradas" :value="$cantEmpresas"/>
           <x-card-resumen bg="bg-amarillo" icon="fas fa-user-friends" title="Empresas Activas" :value="$empresasAct"/>
           <x-card-resumen bg="bg-rojo" icon="fas fa-user-friends" title="Pacientes Activos" :value="$pacientesAct"/>
           <x-card-resumen bg="bg-azul" icon="fa fa-gamepad" title="Medicos Activos" :value="$medicosAct"/>

           <x-card-resumen bg="bg-verde" icon="fas fa-user-friends" title="Usuarios Activos" :value="$usuariosAct"/>
           <x-card-resumen bg="bg-amarillo" icon="fas fa-user-friends" title="Asesores Activos" :value="$asesoresAct"/>
           <x-card-resumen bg="bg-rojo" icon="fa fa-calendar-alt" title="Citas Registradas" :value="$cantCitas"/>
           <x-card-resumen bg="bg-azul" icon="fa fa-calendar-alt" title="Citas Activas" :value="$citasActivas"/>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
              <div class="card">
                  <div class="card-body pb-4 pt-4 pl-3 pr-3">
                      <p style="color: gray;" class="col-12 text-center">Citas Activas</p>
                      <div id="my-chart" style="width:100%;" ></div>
                  </div>
              </div>
          </div>        
          <div class="col-lg-6 mb-4">
              <div class="card">
                  <div class="card-body pb-4 pt-4 pl-3 pr-3">
                      <p style="color: gray;" class="col-12 text-center">Graficos estadisticos - Ejercicios</p>
                      <div id="my-chart2" style="width:100%; "></div>
                  </div>
              </div>
          </div>
      </div>
@endsection


@section('script')
<script src="/vendor/chartist/chartist.min.js"></script>
<script>
      cargando();
      $("#li-resumen a.nav-link").addClass("active");   

      cargarGraficos();
      function cargando(){
          swal('Cargando, espere un momento por favor ... ',{
              closeOnClickOutside: false,
              buttons: false,
              content: {
                  element: "img",
                  attributes: {
                  title: "cargando",
                  src: "{{ asset('img/cargando.gif') }}",
                  style: "width:25px; margin-bottom:20px;"
                  },
              },
          });
      }


      function cargarGraficos(){
          var responsiveOptions = [
              ['screen and (min-width: 641px) and (max-width: 1024px)', {
                  showPoint: false,
                  axisX: {
                  labelInterpolationFnc: function(value) {
                      return '' + value;
                  }
                  }
              }],
              ['screen and (max-width: 640px)', {
                  showLine: false,
                  axisX: {
                  labelInterpolationFnc: function(value) {
                      return '' + value;
                  }
                  }
              }]
          ];

          /* Establezca algunas opciones básicas (la configuración anulará la configuración predeterminada en Chartist.js * ver configuración predeterminada *). Estamos agregando una función básica de interpolación de etiquetas para las etiquetas xAxis. */
          var options = {
              axisX: {
                  labelInterpolationFnc: function(value) {
                  return '' + value;
                  }
              },
              height: 300
          };            
      
          /* Agregar una serie de datos básica con seis etiquetas y valores */
          var data = {
          labels: ['Empresas Reg.', 'Empresas Act.', 'Citas Reg.', 'Citas Act.'],
          series: [
              {
              data: [ {{ $cantEmpresas }},  {{ $empresasAct }},  {{ $cantCitas }},  {{ $citasActivas }} ]
              }
          ]
          };

           /* Inicializar el gráfico con la configuración anterior */
          new Chartist.Line('#my-chart', data, options, responsiveOptions);

          
          var data2 = {
              labels: [ 'Pacientes Act.', 'Medicos Act.', 'Usuarios Act.', 'Asesores Act.'],
              series: [
                  {
                    data: [ {{ $pacientesAct }},  {{ $medicosAct }},  {{ $usuariosAct }},  {{ $asesoresAct }} ]
                  }
              ]
          };
          new Chartist.Line('#my-chart2', data2, options, responsiveOptions);


          setTimeout(() => {
              swal.close();
          }, 500);
      }
  </script>

@endsection