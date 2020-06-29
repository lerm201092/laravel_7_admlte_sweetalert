@extends('layouts.admin')

@section('head')
<style>
    table>tbody>tr>td:first-child {
        width: 25% !important;
    }
    .msg-err{
        font-size: 11px!important;
    }

</style>
@endsection

@section('content')
<div class="row justify-content-center px-1 py-4">
    <div class="col-md-12 card p-0">
        <div class="card-header">
            <p class="font-weight-bold mb-0">Editar información de usuarios</p>
        </div>
        <div class="card-body px-4">
            {{ Form::open([ 'method' => 'PUT', 'onsubmit' => 'cargando()', 'url' => '/admin/usuarios/editar/'.$usuario->id ])  }}
            <div class="row">
                <div class="col-12">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Info. Usuario</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="tipoid">Tipo Id: </label>
                        {{ Form::select('tipoid', $js_tipoid, $usuario->tipoid, ['required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        @error('numid') <?php $err = ' is-invalid'; ?>  @else  <?php $err = ''; ?>  @enderror
                        <label class="mb-0" for="numid">Identificación: </label>
                        {!! Form::text('numid', $usuario->numid, ['required', 'class' => 'form-control form-control-sm'.$err]) !!}
                        @error('numid')<p><span class="text-danger font-weight-bold msg-err">{{ $message }}</span></p>@enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Sexo:</label>
                        {{ Form::select('sexo', $js_sexo, $usuario->sexo, ['required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Nombre: </label>
                        {!! Form::text('nombre', $usuario->nombre, ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Apellido:</label>
                        {!! Form::text('apellido', $usuario->apellido, ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>


                <div class="col-12 mt-5">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Contacto</p>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        @error('email') <?php $err = ' is-invalid'; ?>  @else  <?php $err = ''; ?>  @enderror
                        <label class="mb-0" for="nit">Email:</label>
                        {!! Form::email('email', $usuario->email, ['required', 'class' => 'form-control form-control-sm'.$err]) !!}
                        @error('email')<p><span class="text-danger font-weight-bold msg-err">{{ $message }}</span></p>@enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Teléfono:</label>
                        {!! Form::text('telefono', $usuario->telefono, ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Dirección:</label>
                        {!! Form::text('direccion', $usuario->direccion, ['required', 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="dpto">Departamento:</label>
                        <select name='dpto' class="form-control form-control-sm">
                            <option value=''>- Escoja una opción -</option>
                            @foreach ($js_dpto as $dpto)
                            <option value='{{ $dpto->id }}' @if($dpto->id == $usuario->dpto) selected @endif>{{ $dpto->nomarea }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="id_area">Ciudad:</label>
                        <select required name='id_area' class="form-control form-control-sm">
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
                        {{ Form::select('estado', $js_estado, $usuario->estado, [ 'required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mb-0" for="nit">Rol:</label>
                        {{ Form::select('rol', $js_rol, $usuario->rol, [ 'required', 'class' => 'form-control form-control-sm']) }}
                    </div>
                </div>

                @if( $usuario->id_empresa == 1 ) <?php $sw = 'd-none'; ?> @else <?php $sw = ''; ?> @endif

                <div class="col-12 mt-5 <?=($sw)?>" id="divCli1">
                    <p style="border-bottom: 2px solid #6c757d; font-weight: 600; color:#6c757d;">Clinica a asociar</p> 
                </div>

                <div class="col-md-12 <?=($sw)?>" id="divCli2">
                    <div class="form-group">
                        <label class="mb-0" for="dpto">Clinica:</label>
                        <select name='id_empresa' class="form-control form-control-sm">
                            <option value=''>- Escoja una opción -</option>
                            @foreach ($js_clinica as $clinica)
                            <option value='{{ $clinica->id }}'  @if($clinica->id == $usuario->id_empresa) selected @endif >{{ $clinica->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <a href="{{ route('AdminUsuariosListado') }}" class="btn bg-secondary text-light btn-sm"><i class="fas fa-caret-left mr-2"></i>Regresar</a>
                    <button class="btn bg-base text-light btn-sm"><i class="fas fa-save mr-2"></i>Guardar</button>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $usuario->id }}" />
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection

@section('script')

@if( count($errors) > 0 )
    {{ $errors }}
    <script> swal("Govista S.A.S.", "Complete los campos correctamente.", "warning"); </script>
    }
@endif

<script>
    $("#li-usuarios a.nav-link").addClass("active");
    
    $("select[name=dpto]").on('change', function() {
        cargando();
        var sel = $(this);
        if (sel.val() !== '') {
            $("select[name=id_empresa]").prop('required', true);
            var url = '{{ route("apiMuni", ":id") }}';
            url = url.replace(":id", sel.val());
            $.ajax({
                type    : 'GET',
                url     : url,
                success : function(data) {
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
        var sel = $(this);
        if (sel.val() == 'AC') {
            $("select[name=id_empresa]").prop('required', true);
            $('select[name=id_empresa]').val('').change();
            $('select[name=id_empresa]')
            $("#divCli1").removeClass('d-none');
            $("#divCli2").removeClass('d-none');
        } else {
            $("select[name=id_empresa]").removeAttr('required');
            $("#divCli1").addClass('d-none');
            $("#divCli2").addClass('d-none');
            $('select[name=id_empresa]').val('').change();
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
