@extends('layouts.clinica')

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
            <p class="font-weight-bold mb-0">Crear nuevo usuario</p>
        </div>
        <div class="card-body px-4">
            {{ Form::open([ 'method' => 'POST', 'onsubmit' => 'cargando()', 'url' => '/clinica/usuarios/crear' ])  }}
            <input type="hidden" name="id_empresa" value="{{ Auth::user()->id_empresa }}" />

            <div class="row">
                <div class="col-12">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Usuario</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="tipoid">Tipo Id: </label>
                        {{ Form::select('tipoid', $js_tipoid, null, ['required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                       	@error('numid') <?php $err = ' is-invalid'; ?>  @else  <?php $err = ''; ?>  @enderror
                        <label class="mb-0" for="numid">Identificación: </label>
                        {!! Form::text('numid', old('numid'), ['required', 'class' => 'form-control form-control-sm'.$err]) !!}
                        @error('numid')<p><span class="text-danger font-weight-bold msg-err">{{ $message }}</span></p>@enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Sexo:</label>
                        {{ Form::select('sexo', $js_sexo, old('sexo'), ['required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Nombre: </label>
                        {!! Form::text('nombre', old('nombre'), ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Apellido:</label>
                        {!! Form::text('apellido', old('apellido'), ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>


                <div class="col-12 mt-5">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Contacto</p>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                       	@error('email') <?php $err = ' is-invalid'; ?>  @else  <?php $err = ''; ?>  @enderror
                        <label class="mb-0" for="nit">Email:</label>
                        {!! Form::email('email', old('email'), ['required', 'class' => 'form-control form-control-sm'.$err]) !!}
                        @error('email')<p><span class="text-danger font-weight-bold msg-err">{{ $message }}</span></p>@enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Teléfono:</label>
                        {!! Form::text('telefono', old('telefono'), ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Dirección:</label>
                        {!! Form::text('direccion', old('direccion'), ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="dpto">Departamento:</label>
                        <select name='dpto' class="form-control form-control-sm">
                            <option value=''>- Escoja una opción -</option>
                            @foreach ($js_dpto as $dpto)
                            <option value='{{ $dpto->id }}'>{{ $dpto->nomarea }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0"  for="id_area">Ciudad:</label>
                        <select  name='id_area' required class="form-control form-control-sm">
                            <option value=''>- Escoja una opción -</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Aplicación</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                       	@error('password2') <?php $err = ' is-invalid'; ?>  @else  <?php $err = ''; ?>  @enderror
                        <label class="mb-0" for="password">Contraseña:</label>
                        {!! Form::Password('password', [ 'required', 'class' => 'form-control form-control-sm'.$err ]) !!}
                        @error('password2')<p><span class="text-danger font-weight-bold msg-err">{{ $message }}</span></p>@enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                       	@error('password2') <?php $err = ' is-invalid'; ?>  @else  <?php $err = ''; ?>  @enderror
                        <label class="mb-0" for="nit">Confirme contraseña:</label>
                        {!! Form::Password('password2', [ 'required', 'class' => 'form-control form-control-sm'.$err ]) !!}
                    	@error('password2')<p><span class="text-danger font-weight-bold msg-err">{{ $message }}</span></p>@enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Estado:</label>
                        {{ Form::select('estado', $js_estado, null, [ 'required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                {{ old('rol') }}
                    <div class="form-group">
                        <label class="mb-0" for="rol">Rol:</label>
                        {{ Form::select('rol', $js_rol, '', [ 'required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>

                <div class="col-12 mt-5 d-none" id="divMed1">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Perfil Medico</p>
                </div>

                <div class="col-md-8 d-none" id="divMed2">
                    <div class="form-group">
                        <label class="mb-0" for="id_profesion">Especialidad Medica:</label>
                        <select name='id_profesion' class="form-control form-control-sm">
                            <option value=''>- Escoja una opción -</option>
                            @foreach ($js_profesion as $profesion)
                            <option value='{{ $profesion->id }}'>{{ $profesion->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-5 d-none" id="divPac1">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Perfil Paciente</p>
                </div>

                <div class="col-md-8 d-none" id="divPac2">
                    <div class="form-group">
                        <label class="mb-0" for="id_eps">EPS Paciente:</label>
                        <select name='id_eps' class="form-control form-control-sm">
                            <option value=''>- Escoja una opción -</option>
                            @foreach ($js_eps as $eps)
                            <option value='{{ $eps->id }}'>{{ $eps->descripcion }}</option>
                            @endforeach
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

@if( count($errors) > 0 )
	<script> swal("Govista S.A.S.", "Complete los campos correctamente.", "warning"); </script>
@endif

<script>
    $("#li-usuarios a.nav-link").addClass("active");
    $('select[name=rol]').val('').change();
	
    $("select[name=dpto]").on('change', function() {
        cargando();
        var sel = $(this);
        if (sel.val() !== '') {
            $("select[name=id_empresa]").prop('required', true);
            var url = '{{ route("apiMuni", ":id") }}';
            url = url.replace(":id", sel.val());
            $.ajax({
                type	: 'GET',
                url 	: url,
                success	: function(data) {
                    var html = "";
                    data.forEach( obj => {
                        html += `<option value='${obj.id}'>${obj.nomarea}</option>`;
                    });
                    $("select[name=id_area]").html(html);
					setTimeout( function() {
						swal.close();
					}, 300 );
                }, error: function(data) {
                    swal('GoVista', 'Error interno, por favor consulte al administrador', 'error');
                    console.log(data);
                }
            });
        } else {
            $("select[name=id_area]").removeAttr('required');
            var html = "<option value=''>- Escoja un opción -</option>";
            $("select[name=id_area]").html(html);
            setTimeout(function() {
                swal.close();
            }, 300);
        }
		
    });

    $("select[name=rol]").on('change', function() {
        $("#divPac1").addClass('d-none');
        $("#divPac2").addClass('d-none');
        $("#divMed1").addClass('d-none');
        $("#divMed2").addClass('d-none');
        $('select[name=id_eps]').val('').change();
        $('select[name=id_profesion]').val('').change();
        $("select[name=id_eps]").removeAttr('required');
        $("select[name=id_profesion]").removeAttr('required');

        var sel = $(this);
        if (sel.val() == 'ME') {
            $("select[name=id_profesion]").prop('required', true);
            $("#divMed1").removeClass('d-none');
            $("#divMed2").removeClass('d-none');
        } else if( sel.val() == 'PA' ) {            
            $("select[name=id_eps]").prop('required', true);
            $("#divPac1").removeClass('d-none');
            $("#divPac2").removeClass('d-none');
        }
    });

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
