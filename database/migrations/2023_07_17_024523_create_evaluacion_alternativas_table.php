<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluacion_alternativas', function (Blueprint $table) {
            $table->id();

            $table->string('alternativa');
            $table->integer('orden');
            $table->unsignedBigInteger('id_pregunta')->nullable();

                        // FK a la evaluación de alternativas que pertenece esta respuesta
            $table->foreign('id_pregunta')
            ->references('id')
            ->on('evaluacion_preguntas')
            ->onDelete('set null');            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_alternativas');
    }
};
