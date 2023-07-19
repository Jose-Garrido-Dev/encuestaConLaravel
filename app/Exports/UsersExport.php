<?php

namespace App\Exports;

use App\Models\evaluacion_respuesta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // Obtener los datos de evaluacion_respuesta
       $data = evaluacion_respuesta::all();

       // Agregar los encabezados a la colección
       $collection = new Collection([
           ['Nombre Evaluador', 'Nombre Evaluado', 'Pregunta', 'Alternativa', 'Estado', 'Fecha Evaluación', 'Evaluación']
       ]);

       // Agregar los datos a la colección
       foreach ($data as $row) {
           $collection->push([
               $row->rut_evaluador,
               $row->rut_evaluado,
               $row->id_pregunta,
               $row->id_alternativa,
               $row->estado,
               $row->fecha,
               $row->id_evaluacion,
           ]);
       }

       return $collection;
   }
    
}
