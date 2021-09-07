<?php

namespace Database\Seeders;

use App\Models\Muestra;
use Illuminate\Database\Seeder;

class Germoteca extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Muestra::create(
            [
            "tipo_id"=> 3,
            "codigo_y_n_de_coleccion"=> "CB-UAB-GE- 0003",
            "colector"=> "Scharlem Hurtado Q.",
            "fecha_de_coleccion"=> "21/04/2007",
            "reino"=> "Plantae",
            "phylum_division"=> "Magnoliophyta",
            "clase"=> "Magnoliopsida",
            "orden"=> "Caryophyllales",
            "familia"=> "Amaranthaceae",
            "genero"=> "Achyranthes",
            "especie"=> "aspera",
            "nombre_completo"=> "Achyranthes aspera L.",
            "nombre_comun"=> "Cola de rata",
            "lugar_colecta"=> "Trinidad",
            "provincia"=> "Cercado",
            "departamento"=> "Beni",
            "pais"=> "BOLIVIA",
            "latitud"=> "X 295422",
            "longitud"=> "Y 8360185",
            "altitud"=> "158 msnm",
            "metodo_colecta"=> "Manual",
            "identificado"=> "Montejo, A.",
            "cant_ejemplares"=> "10",
            "localizacion"=> "Mb-1, Cj-2"
        ]
        );
        Muestra::create(
            [
            "tipo_id"=> 3,
            "codigo_y_n_de_coleccion"=> "CB-UAB-GE- 0008",
            "colector"=> "Samuel Molina",
            "fecha_de_coleccion"=> "05/06/2007",
            "reino"=> "Plantae",
            "phylum_division"=> "Magnoliophyta",
            "clase"=> "Magnoliopsida",
            "orden"=> "Caryophyllales",
            "familia"=> "Amaranthaceae",
            "genero"=> "Alternanthera",
            "especie"=> "brasiliana",
            "nombre_completo"=> "Alternanthera brasiliana (L.) Kuntze",
            "nombre_comun"=> "Siempre viva",
            "lugar_colecta"=> "Trinidad",
            "provincia"=> "Cercado",
            "departamento"=> "Beni",
            "pais"=> "BOLIVIA",
            "latitud"=> "X 295422",
            "longitud"=> "Y 8360185",
            "altitud"=> "158 msnm",
            "metodo_colecta"=> "Manual",
            "identificado"=> "Montejo, A.",
            "cant_ejemplares"=> "11",
            "localizacion"=> "Mb-1, Cj-2"
        ]
        );
        Muestra::create(
            [
            "tipo_id"=> 3,
            "codigo_y_n_de_coleccion"=> "CB-UAB-GE- 0089",
            "fecha_de_coleccion"=> "10/11/2011",
            "reino"=> "Plantae",
            "phylum_division"=> "Magnoliophyta",
            "clase"=> "Magnoliopsida",
            "orden"=> "Caryophyllales",
            "familia"=> "Amaranthaceae",
            "genero"=> "Alternanthera",
            "especie"=> "tenella",
            "nombre_completo"=> "Alternanthera tenella Colla",
            "nombre_comun"=> "Apaga fuego",
            "lugar_colecta"=> "B/ El Recreo - Trinidad",
            "provincia"=> "Cercado",
            "departamento"=> "Beni",
            "pais"=> "BOLIVIA",
            "latitud"=> "X 297481",
            "longitud"=> "Y 8360878",
            "altitud"=> "158 msnm",
            "metodo_colecta"=> "Manual",
            "identificado"=> "Montejo, A.",
            "cant_ejemplares"=> "1",
            "localizacion"=> "Mb-1, Cj-2"
        ]
        );
    }
}
