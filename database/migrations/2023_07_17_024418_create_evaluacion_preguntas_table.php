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
        Schema::create('evaluacion_preguntas', function (Blueprint $table) {
            $table->id();
            
            $table->string('pregunta');
            $table->integer('orden');
            $table->unsignedBigInteger('id_evaluacion')->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();

            $table->foreign('id_evaluacion')
                  ->references('id')
                  ->on('evaluacions')
                  ->onDelete('set null');

            $table->foreign('id_categoria')
                  ->references('id')
                  ->on('pregunta_categorias')
                  ->onDelete('set null');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_preguntas');
    }
};
