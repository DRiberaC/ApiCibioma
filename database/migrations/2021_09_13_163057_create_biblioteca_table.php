<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliotecaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblioteca', function (Blueprint $table) {
            $table->id();

            $table->string('n_inventario')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->string('anho')->nullable();
            $table->string('etiqueta')->nullable();
            $table->string('serie')->nullable();
            $table->string('idioma')->nullable();
            $table->string('formato')->nullable();
            $table->string('cant_ejemplares')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biblioteca');
    }
}
