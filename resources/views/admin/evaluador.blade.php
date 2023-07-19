
@extends('adminlte::page')




@section('title', 'Ev Administrador')

@section('content_header')

   
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
<h3>Bienvenido SR. {{ Auth::user()->nombre }}</h3>


@stop

@section('content')
<a href="{{ route('admin.evaluacion.index') }}" class="btn btn-primary">Ver usuarios</a>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop