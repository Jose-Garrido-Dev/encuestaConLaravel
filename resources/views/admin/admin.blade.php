
@extends('adminlte::page')




@section('title', 'Ev Administrador')

@section('content_header')
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
<h3>Bienvenido SR. {{ Auth::user()->nombre }}</h3>
    

    
@stop

@section('content')



        <div class="card">
            <div class="card-body">

                    <p class="p-2 bg-info text-white">Descargar reporte de evaluaciones.</p>
                
                    <a href="{{ route('users.export') }}" class="btn btn-primary btn-lg">Obtener Reporte</a>


            </div>
        </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop