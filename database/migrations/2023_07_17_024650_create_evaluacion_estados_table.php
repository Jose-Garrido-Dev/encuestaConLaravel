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
        Schema::create('evaluacion_estados', function (Blueprint $table) {
            $table->id();

            $table->string('rut_evaluado');
            $table->enum('estado',[0,1])->default(0);
            $table->date('fecha');
            $table->unsignedBigInteger('id_evaluacion')->nullable(); 

            $table->foreign('id_evaluacion')
            ->references('id_evaluacion')
            ->on('evaluacion_respuestas')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_estados');
    }
};
