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
        Schema::create('evaluacion_respuestas', function (Blueprint $table) {
            $table->id();

            $table->string('rut_evaluador');
            $table->string('rut_evaluado');
            $table->unsignedBigInteger('id_pregunta');
            $table->unsignedBigInteger('id_alternativa')->nullable();
            $table->enum('estado',[0,1])->default(1);
            $table->date('fecha');
            $table->unsignedBigInteger('id_evaluacion')->nullable();

            $table->foreign('id_pregunta')
            ->references('id')
            ->on('evaluacion_preguntas');

            $table->foreign('id_alternativa')
            ->references('id')
            ->on('evaluacion_alternativas')
            ->onDelete('set null');

            $table->foreign('id_evaluacion')
            ->references('id')
            ->on('evaluacions')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_respuestas');
    }
};
