
@extends('adminlte::page')




@section('title', 'Ev Administrador')

@section('content_header')

   
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>

@stop

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            
            <h3>Listado de Usuarios</h3>



            @if (count($usersList) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>RUT</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Cargo</th>
                            <th>Perfil</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($usersList as $user)
                            @if (!in_array($user->rut, $evaluatedRuts))
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->rut }}</td>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->cargo }}</td>
                                    <td>{{ $user->perfil }}</td>
                                    <td>
                                        <form action="{{ route('admin.evaluacion.evaluar') }}" method="get">
                                            @csrf
                                            <input type="hidden" name="rut" value="{{ $user->rut }}">
                                            <button type="submit" class="btn btn-primary">Evaluar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info">
                    No hay usuarios disponibles para evaluar.
                </div>
            @endif

                  
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