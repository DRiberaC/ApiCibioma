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
            $table->string('colector')->default('');
            $table->string('procesado')->default('');
            $table->string('muestra_respaldo')->default('');
            $table->string('fecha_de_coleccion')->default('');
            $table->string('reino')->default('');
            $table->string('phylum_division')->default('');
            $table->string('clase')->default('');
            $table->string('orden')->default('');
            $table->string('familia')->default('');
            $table->string('subfamilia')->default('');
            $table->string('genero')->default('');
            $table->string('epiteto_especifico')->default('');
            $table->string('especie')->default('');
            $table->string('variedad')->default('');
            $table->string('nombre_cientifico')->default('');
            $table->string('nombre_completo')->default('');
            $table->string('nombre_comun')->default('');
            $table->string('lugar_colecta')->default('');
            $table->string('provincia')->default('');
            $table->string('departamento')->default('');
            $table->string('pais')->default('');
            $table->string('latitud')->default('');
            $table->string('longitud')->default('');
            $table->string('datum')->default('');
            $table->string('altitud')->default('');
            $table->string('geo_lat')->default('');
            $table->string('geo_lon')->default('');
            $table->string('area_protegida')->default('');
            $table->string('metodo_colecta')->default('');
            $table->string('identificado')->default('');
            $table->string('tipo_registro')->default('');
            $table->string('cant_ejemplares')->default('');
            $table->string('localizacion')->default('');
            $table->string('sexo')->default('');
            $table->string('edad')->default('');
            $table->string('notas')->default('');
            $table->string('agrupacion')->default('');
            $table->string('tamanho_vp')->default('');
            $table->string('tamanho_ve')->default('');
            $table->string('forma')->default('');
            $table->string('apertura')->default('');
            $table->string('ornamentacion')->default('');

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
