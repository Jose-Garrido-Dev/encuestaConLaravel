<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\pregunta_categoria;
use App\Models\evaluacion_pregunta;
use App\Models\evaluacion_alternativa;
use App\Models\evaluacion;
use App\Models\evaluacion_respuesta;
use App\Exports\CustomUsersExport;


use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    /*
            $usersList = User::all();
        */
        $usersList = User::where('perfil', 'Evaluado')
        ->where('estado', 'Activo')
        ->get();
        //se consulta el rut del usuario evaluado si está en la tabla no mostrará boton
        $evaluatedRuts = evaluacion_respuesta::distinct('rut_evaluado')->pluck('rut_evaluado')->toArray();

        return view('admin.evaluacion.evaluacion', compact('usersList','evaluatedRuts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pregunta_categoria $cat)
    {
        $cat = pregunta_categoria::all();
        return view('admin.evaluacion.evaluacion', compact('cat'));
    }


    public function evaluarUsuario(Request $request)
    {
        $rut = $request->input('rut');
        return redirect()->route('admin.evaluacion.evaluacionUsuario', ['rut' => $rut]);
    }

    public function evaluacionUsuario()
    {
    // Obtener el valor de $rutEvaluado desde la URL usando el Facade request
    $rutEvaluado = request('rut');

        // Obtener la información de la evaluación con ID = 1
        $evaluacion = Evaluacion::find(1);

        // Obtener las preguntas asociadas a la evaluación junto con las alternativas (cargar la relación)
        $preguntas = evaluacion_pregunta::where('id_evaluacion', 1)
            ->with('evaluacion_alternativas')->get();

        return view('admin.evaluacion.evaluar', compact('evaluacion', 'preguntas', 'rutEvaluado'));
    }

    public function guardarRespuestas(Request $request)
    {
        try {
            $user = auth()->user(); // Obtener el usuario logueado
            $rutEvaluado = $request->input('rutEvaluado'); // Obtener el valor de $rutEvaluado del campo oculto

            $respuestas = $request->input('respuestas'); // Obtener las respuestas seleccionadas

            // Crear un array para almacenar las respuestas a insertar
            $respuestasInsert = [];

            // Recorrer las respuestas seleccionadas y agregarlas al array de inserción
            foreach ($respuestas as $idPregunta => $idAlternativa) {
                $respuesta = [
                    'rut_evaluador' => $user->rut,
                    'rut_evaluado' => $rutEvaluado,
                    'id_pregunta' => $idPregunta,
                    'id_alternativa' => $idAlternativa,
                    'estado' => 1,
                    'fecha' => now(),
                    'id_evaluacion' => 1,
                    'created_at' => now(), // Asegúrate de incluir las fechas de creación y actualización si son requeridas por la tabla
                    'updated_at' => now(),
                ];

                // Agregar la respuesta al array de inserción
                $respuestasInsert[] = $respuesta;
            }

            // Insertar las respuestas en la tabla usando Eloquent
            evaluacion_respuesta::insert($respuestasInsert);

            // Retornar una respuesta en formato JSON para indicar que la respuesta se guardó correctamente
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Retornar una respuesta en formato JSON para indicar que ocurrió un error al guardar la respuesta
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function export() 
    {
           return Excel::download(new UsersExport, 'users.xlsx');
       // return Excel::download(new CustomUsersExport, 'users.xlsx');
    }


}
