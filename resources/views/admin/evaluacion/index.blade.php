
@extends('adminlte::page')




@section('title', 'Ev Administrador')

@section('content_header')

   
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
<a href="javascript:history.back()" class="btn btn-primary float-right mr-3">regresar</a>

@stop

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">

            <a href="{{ route('admin.evaluacion.show') }}" class="btn btn-primary">Ver categorias</a>
                    
        </div>
    </div>

    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop