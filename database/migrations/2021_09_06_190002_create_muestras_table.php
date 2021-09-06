<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muestras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');

            $table->string('codigo_y_n_de_coleccion');
            $table->string('colector');
            $table->string('procesado')->nullable();
            $table->string('muestra_respaldo')->nullable();
            $table->string('fecha_de_coleccion');
            $table->string('reino');
            $table->string('phylum_division');
            $table->string('clase');
            $table->string('orden');
            $table->string('familia');
            $table->string('subfamilia')->nullable();
            $table->string('genero');
            $table->string('especie');
            $table->string('variedad');
            $table->string('nombre_cientifico');
            $table->string('nombre_completo');
            $table->string('nombre_comun');
            $table->string('lugar_colecta');
            $table->string('provincia');
            $table->string('departamento');
            $table->string('pais');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('altitud');
            $table->string('geo_lat');
            $table->string('geo_lon');
            $table->string('area_protegida')->nullable();
            $table->string('metodo_colecta')->nullable();
            $table->string('identificado')->nullable();
            $table->string('tipo_registro')->nullable();
            $table->string('cant_ejemplares')->nullable();
            $table->string('localizacion')->nullable();
            $table->string('sexo')->nullable();
            $table->string('edad')->nullable();
            $table->string('notas')->nullable();
            $table->string('agrupacion')->nullable();
            $table->string('tamanho_vp')->nullable();
            $table->string('tamanho_ve')->nullable();
            $table->string('forma')->nullable();
            $table->string('apertura')->nullable();
            $table->string('ornamentacion')->nullable();

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
        Schema::dropIfExists('muestras');
    }
}
