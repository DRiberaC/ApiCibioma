<?php

namespace Database\Seeders;

use App\Models\Muestra;
use Illuminate\Database\Seeder;

class Palinoteca extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Muestra::create([
            "tipo_id"=> 5,
            "codigo_y_n_de_coleccion"=> "CB-UAB-PL-0016",
            "colector"=> "Antelo, M. X.",
            "procesado"=> "Antelo, M. X.",
            "muestra_respaldo"=> "CB-UAB-PL-RS-0016",
            "fecha_de_coleccion"=> "02/09/2016",
            "reino"=> "Plantae",
            "phylum_division"=> "Magnoliophyta",
            "clase"=> "Magnoliopsida",
            "orden"=> "Lamiales",
            "familia"=> "Bignoniaceae",
            "genero"=> "Tabebuia",
            "especie"=> "roseo alba",
            "nombre_completo"=> "Tabebuia roseo alba",
            "nombre_comun"=> "Tajibo blanco",
            "latitud"=> "X 294202",
            "longitud"=> "Y 8359651",
            "altitud"=> "160 msnm.",
            "agrupacion"=> "Monada",
            "tamanho_vp"=> "21.4",
            "tamanho_ve"=> "20.1",
            "forma"=> "Esferoidal",
            "apertura"=> "Tricolpado",
            "ornamentacion"=> "Reticulada"
        ]);
    }
}
