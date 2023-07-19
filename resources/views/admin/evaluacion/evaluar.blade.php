
@extends('adminlte::page')




@section('title', 'Ev Administrador')

@section('content_header')

   
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
<a href="{{ route('admin.evaluacion.index') }}" class="btn btn-primary float-right mr-3">regresar</a>

@stop

@section('content_header')
<button class="btn btn-danger float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
<a href="{{ route('admin.evaluacion.index') }}" class="btn btn-primary float-right mr-3">regresar</a>
@stop

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3>Preguntas de evaluación</h3>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Evaluación: {{ $evaluacion->nombre_evaluacion }}</h3>
                        <div class="card-tools">
                            <!-- Collapse Button -->
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form id="evaluacionForm">
                            @csrf
                            <input type="hidden" name="rutEvaluado" value="{{ $rutEvaluado }}">
                            @foreach ($preguntas as $pregunta)
                                <div class="mb-3">
                                    <h5>Pregunta: {{ $pregunta->pregunta }}</h5>
                                    @foreach ($pregunta->evaluacion_alternativas as $alternativa)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="respuestas[{{ $pregunta->id }}]" value="{{ $alternativa->id }}" id="pregunta_{{ $pregunta->id }}_alternativa_{{ $alternativa->id }}" data-pregunta="{{ $pregunta->id }}">
                                            <label class="form-check-label" for="pregunta_{{ $pregunta->id }}_alternativa_{{ $alternativa->id }}">
                                                {{ $alternativa->alternativa }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                            <!-- Agregar el botón "Guardar" aquí -->
                            <button type="button" id="guardarRespuestasBtn" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
@stop


@section('css')
    
@stop

@section('js')
<script>
    document.getElementById('guardarRespuestasBtn').addEventListener('click', function() {
        // Obtener los datos del formulario
        var formData = new FormData(document.getElementById('evaluacionForm'));

        // Enviar la solicitud AJAX
        fetch("{{ route('admin.evaluacion.guardarRespuestas') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Agregar el token CSRF en las cabeceras de la solicitud
            }
        })
        .then(response => response.json())
        .then(data => {
            // Manejar la respuesta aquí
            if (data.success) {
                alert('Respuestas guardadas exitosamente');

                // Redireccionar a la vista después de 3 segundos
                    setTimeout(function() {
                    window.location.href = "{{ route('admin.evaluacion.index') }}";
                }, 1000); // 3000 milisegundos (3 segundos)

            } else {
                alert('Ocurrió un error al guardar las respuestas');
            }
        })
        .catch(error => {
            // Manejar errores aquí
            console.error('Error al enviar respuestas:', error);
        });
    });
</script>
@stop