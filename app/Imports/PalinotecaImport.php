<?php

namespace App\Imports;

use App\Models\Muestra;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class PalinotecaImport implements ToModel, WithStartRow, WithValidation, SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;

    public function rules(): array
    {
        return [
            '11' => 'unique:muestras,nombre_cientifico',
        ];
    }

    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }
    
    public function model(array $row)
    {
        return new Muestra([
            'tipo_id' => 5,
            'codigo_y_n_de_coleccion' => $row[0],
            'colector' => $row[1],
            'fecha_de_coleccion' => $row[2],
            'reino' => $row[3],
            'phylum_division' => $row[4],
            'clase' => $row[5],
            'orden' => $row[6],
            'familia' => $row[7],
            'subfamilia' => $row[8],
            'genero' => $row[9],
            'especie' => $row[10],
            'variedad' => $row[1],
            'nombre_cientifico' => $row[12],
            'nombre_completo' => $row[13],
            'nombre_comun' => $row[14],
            'lugar_colecta' => $row[15],
            'provincia' => $row[16],
            'departamento' => $row[17],
            'pais' => $row[18],
            'latitud' => $row[19],
            'longitud' => $row[20],
            'altitud' => $row[21],
            'geo_lat' => $row[22],
            'geo_lon' => $row[23],
            'agrupacion' => $row[24],
            'tamanho_vp' => $row[25],
            'tamanho_ve' => $row[26],
            'forma' => $row[27],
            'apertura' => $row[28],
            'ornamentacion' => $row[29],
            'notas' => $row[30]

        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
