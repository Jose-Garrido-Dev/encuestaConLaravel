

@extends('adminlte::page')




@section('title', 'Ev Administrador')

@section('content_header')

   
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
<a href="{{ route('admin.evaluacion.index') }}" class="btn btn-primary float-right mr-3">ir al menú principal</a>

@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif






            
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop