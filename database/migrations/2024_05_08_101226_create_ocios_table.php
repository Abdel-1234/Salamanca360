<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->string('ubicacion_enlace',2000);
            $table->string('enlace');
            $table->string('imagen_ruta');
            $table->string('decripcionMin');
            $table->string('decripcionMax', 2000);
            $table->string('telefono');
            $table->string('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocios');
    }
};
