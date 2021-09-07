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

            $table->string('codigo_y_n_de_coleccion')->nullable();
            $table->string('colector')->nullable();
            $table->string('procesado')->nullable();
            $table->string('muestra_respaldo')->nullable();
            $table->string('fecha_de_coleccion')->nullable();
            $table->string('reino')->nullable();
            $table->string('phylum_division')->nullable();
            $table->string('clase')->nullable();
            $table->string('orden')->nullable();
            $table->string('familia')->nullable();
            $table->string('subfamilia')->nullable();
            $table->string('genero')->nullable();
            $table->string('epiteto_especifico')->nullable();
            $table->string('especie')->nullable();
            $table->string('variedad')->nullable();
            $table->string('nombre_cientifico')->nullable();
            $table->string('nombre_completo')->nullable();
            $table->string('nombre_comun')->nullable();
            $table->string('lugar_colecta')->nullable();
            $table->string('provincia')->nullable();
            $table->string('departamento')->nullable();
            $table->string('pais')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('datum')->nullable();
            $table->string('altitud')->nullable();
            $table->string('geo_lat')->nullable();
            $table->string('geo_lon')->nullable();
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
