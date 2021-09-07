<?php

namespace Database\Seeders;

use App\Models\Muestra;
use Illuminate\Database\Seeder;

class Entomologia extends Seeder
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
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0001",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "1/4/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Uraniidae ",
                "genero"=> "Urania",
                "epiteto_especifico"=> "leilus",
                "nombre_completo"=> "Urania leilus",
                "nombre_comun"=> "fulgens",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0002",
                "fecha_de_coleccion"=> "6/25/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Caligo",
                "epiteto_especifico"=> "illioneus",
                "nombre_completo"=> "Caligo illioneus ",
                "nombre_comun"=> "Mariposa búho",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "datum"=> "WGS84",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Hembra",
                "edad"=> "Adulto",
                "notas"=> "pheidriades?"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0003",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "9/29/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Noctuidae",
                "genero"=> "Diphthera",
                "epiteto_especifico"=> "festiva",
                "nombre_completo"=> "Diphtera festiva",
                "nombre_comun"=> "Mariposa jeroglíco",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0004",
                "colector"=> "xx",
                "fecha_de_coleccion"=> "5/20/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Eumorpha",
                "epiteto_especifico"=> "labruscae",
                "nombre_completo"=> "Eumorpha labruscae",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0005",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "1/1/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Hesperiidae",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0006",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "4/4/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "HEMIPTERA",
                "familia"=> "Membracidae ",
                "genero"=> "Membracis ",
                "epiteto_especifico"=> "foliata ",
                "nombre_completo"=> "Membracis foliata ",
                "lugar_colecta"=> "TDD-Pantanal",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0007",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "6/5/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Methona",
                "epiteto_especifico"=> "sp.",
                "nombre_completo"=> "Methona sp.",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Red",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0008",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "1/1/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "COLEOPTERA",
                "familia"=> "Carabidae",
                "genero"=> "Scarites",
                "nombre_completo"=> "Scarites",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0009",
                "colector"=> "Valdivia, C.",
                "fecha_de_coleccion"=> "5/16/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "COLEOPTERA",
                "familia"=> "Brentidae",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0010",
                "colector"=> "Feldmann, N.",
                "fecha_de_coleccion"=> "6/10/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "COLEOPTERA",
                "familia"=> "Scarabaeidae",
                "genero"=> "Strategus",
                "epiteto_especifico"=> "aloeus",
                "nombre_completo"=> "Strategus aloeus",
                "lugar_colecta"=> "Río Ibare/Mamoré",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Hembra",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0011",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "2/12/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Anartia",
                "epiteto_especifico"=> "jatrophae",
                "nombre_completo"=> "Anartia jatrophae",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Red",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0012",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "6/20/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Manduca",
                "epiteto_especifico"=> "hannibal",
                "nombre_completo"=> "Manduca hannibal",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto",
                "notas"=> "hamilcar?"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0013",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "3/25/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Erebidae",
                "genero"=> "Hypocrita",
                "epiteto_especifico"=> "plagifera",
                "nombre_completo"=> "Hypocrita plagifera",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0014",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "6/3/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Lycorea",
                "epiteto_especifico"=> "halia",
                "nombre_completo"=> "Lycorea halia",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0015",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "3/3/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "ORTHOPTERA",
                "familia"=> "Gryllotalpidae",
                "genero"=> "Gryllotalpa",
                "nombre_completo"=> "Gryllotalpa",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0016",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "7/10/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "HEMIPTERA",
                "familia"=> "Reduviidae",
                "genero"=> "Rasahus",
                "nombre_completo"=> "Rasahus",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "m",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0017",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "7/12/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Enyo",
                "epiteto_especifico"=> "ocypete ",
                "nombre_completo"=> "Enyo ocypete ",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0018",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "6/25/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "HYMENOPTERA",
                "familia"=> "Ichneumonidae",
                "genero"=> "Cryptanura ",
                "nombre_completo"=> "Cryptanura ",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0019",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "2/11/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Arctiidae",
                "genero"=> "Dysschema ",
                "epiteto_especifico"=> " sacrifica",
                "nombre_completo"=> "Dysschema sacrifica",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0020",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "5/15/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Papilionidae",
                "genero"=> "Anartia",
                "epiteto_especifico"=> "amathea",
                "nombre_completo"=> "Anartia amathea",
                "lugar_colecta"=> "TDD UABJB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Red",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0021",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "5/15/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Caligo",
                "epiteto_especifico"=> "illioneus",
                "nombre_completo"=> "Caligo illioneus ",
                "nombre_comun"=> "Mariposa búho",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "datum"=> "WGS84",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Hembra",
                "edad"=> "Adulto",
                "notas"=> "pheidriades?"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0022",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "4/12/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Agraulis",
                "epiteto_especifico"=> "vanillae",
                "nombre_completo"=> "Agraulis vanillae",
                "nombre_comun"=> "Mariposa espejitos",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0023",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "3/26/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Enyo",
                "epiteto_especifico"=> "ocypete ",
                "nombre_completo"=> "Enyo",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Hembra",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0024",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "7/13/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Hesperiidae",
                "genero"=> "Urbanus",
                "epiteto_especifico"=> "proteus",
                "nombre_completo"=> "Urbanus proteus ",
                "lugar_colecta"=> "TDD-Materno",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0025",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "7/2/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Pieridae",
                "genero"=> "Phoebis",
                "epiteto_especifico"=> "sennae",
                "nombre_completo"=> "Phoebis sennae",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Red",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0026",
                "colector"=> "Valdivia, C.",
                "fecha_de_coleccion"=> "1/11/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "COLEOPTERA",
                "familia"=> "Blattodea",
                "genero"=> "Eublaberus",
                "epiteto_especifico"=> "sp.",
                "nombre_completo"=> "Eublaberus sp.",
                "nombre_comun"=> "Chulupi",
                "lugar_colecta"=> "Mamoré",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0027",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "1/4/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "HYMENOPTERA",
                "familia"=> "Belostomatidae",
                "genero"=> "Lethocerus",
                "nombre_completo"=> "Lethocerus",
                "nombre_comun"=> "Chulupaca",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "M",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0028",
                "colector"=> "Díez, C.",
                "fecha_de_coleccion"=> "6/4/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Lycorea",
                "epiteto_especifico"=> "halia",
                "nombre_completo"=> "Lycorea halia",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0029",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "3/25/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Lycorea",
                "epiteto_especifico"=> "halia",
                "nombre_completo"=> "Lycorea halia",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "latitud"=> "0",
                "longitud"=> "0",
                "altitud"=> "0",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "cant_ejemplares"=> "1",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0030",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "2/28/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Hesperiidae",
                "genero"=> "Heliopetes",
                "epiteto_especifico"=> "arsalte",
                "nombre_completo"=> "Heliopetes arsalte",
                "lugar_colecta"=> "TDD-UAB",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Red",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0031",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "4/16/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Nymphalidae",
                "genero"=> "Mechanitis",
                "epiteto_especifico"=> "lysimnia",
                "nombre_completo"=> "Mechanitis lysimnia",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Red",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0032",
                "colector"=> "Terrazas, R.",
                "fecha_de_coleccion"=> "6/25/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "HEMIPTERA",
                "familia"=> "Belostomatidae",
                "genero"=> "Belostoma",
                "epiteto_especifico"=> "aurivillianum?",
                "nombre_completo"=> "Belostoma aurivillianum?",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0033",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "7/5/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "HEMIPTERA",
                "familia"=> "Nepidae",
                "genero"=> "Ranatra",
                "epiteto_especifico"=> "sp.",
                "nombre_completo"=> "Ranatra sp.",
                "nombre_comun"=> "Escorpión de agua",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0034",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "8/29/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Erinnyis",
                "epiteto_especifico"=> "obscura",
                "nombre_completo"=> "Erinnyis obscura",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Hembra",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0035",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "7/5/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Erinnyis",
                "epiteto_especifico"=> "domingonis",
                "nombre_completo"=> "Erinnyis domingonis",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0036",
                "colector"=> "González, Dani",
                "fecha_de_coleccion"=> "1/11/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Arctiidae",
                "genero"=> "Trichura",
                "epiteto_especifico"=> "cerbeus?",
                "nombre_completo"=> "Trichura cerberus",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto",
                "notas"=> "Sin antenas ni apéndice"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0037",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/21/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "COLEOPTERA",
                "familia"=> "Escarabaeidae",
                "genero"=> "Rutela",
                "epiteto_especifico"=> "lineola",
                "nombre_completo"=> "Rutela lineola",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0038",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/22/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Amphonyx (Cocytius)",
                "epiteto_especifico"=> "duponchel",
                "nombre_completo"=> "Amphonyx duponchel",
                "lugar_colecta"=> "Sta M-camino Loreto",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Hembra",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0039",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/22/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Amphonyx (Cocytius)",
                "epiteto_especifico"=> "duponchel",
                "nombre_completo"=> "Amphonyx duponchel",
                "lugar_colecta"=> "Sta M-camino Loreto",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0040",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/22/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Amphonyx (Cocytius)",
                "epiteto_especifico"=> "duponchel",
                "nombre_completo"=> "Amphonyx duponchel",
                "lugar_colecta"=> "Sta M-camino Loreto",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0041",
                "colector"=> "Ten, Silvia",
                "fecha_de_coleccion"=> "6/11/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Agrius",
                "epiteto_especifico"=> "cingulatus",
                "nombre_completo"=> "Agrius cingulatus",
                "lugar_colecta"=> "TDD",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0042",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/22/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Pseudosphinx",
                "epiteto_especifico"=> "tetrio",
                "nombre_completo"=> "Pseudosphinx tetrio",
                "lugar_colecta"=> "Sta M-camino Loreto",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Hembra",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0043",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/22/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Pseudosphinx",
                "epiteto_especifico"=> "tetrio",
                "nombre_completo"=> "Pseudosphinx tetrio",
                "lugar_colecta"=> "Sta M-camino Loreto",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "sexo"=> "Macho",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0044",
                "colector"=> "Vargas, x",
                "fecha_de_coleccion"=> "7/22/14",
                "reino"=> "ANIMALIA",
                "phylum_division"=> "ARTHROPODA",
                "clase"=> "INSECTA",
                "orden"=> "LEPIDOPTERA",
                "familia"=> "Sphingidae",
                "genero"=> "Pseudosphinx",
                "epiteto_especifico"=> "tetrio",
                "nombre_completo"=> "Pseudosphinx tetrio",
                "lugar_colecta"=> "Sta M-camino Loreto",
                "departamento"=> "Beni",
                "pais"=> "BOLIVIA",
                "metodo_colecta"=> "Manual",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0045",
                "nombre_completo"=> "Rothschildia aurota"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0046",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "tipo_registro"=> "PreservedSpecimen ",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0047",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0048",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "edad"=> "Adulto"
            ]
        );
        Muestra::create(
            [
                "tipo_id"=> 2,
                "codigo_y_n_de_coleccion"=> "CB-UAB-ZE- 0049",
                "pais"=> "BOLIVIA",
                "identificado"=> "Ten, S.",
                "edad"=> "Adulto"
            ]
        );
    }
}
