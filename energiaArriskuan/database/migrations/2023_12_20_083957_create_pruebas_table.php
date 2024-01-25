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
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_partida');
            $table->foreign('id_partida')->references('id')->on('partidas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('izena');
            $table->string('denbora')->nullable();
            $table->boolean('bukatuta')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas');
    }
};
