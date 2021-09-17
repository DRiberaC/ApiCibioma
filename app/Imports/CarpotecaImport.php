<?php

namespace App\Imports;

use App\Models\Muestra;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class CarpotecaImport implements ToModel, WithStartRow, WithValidation, SkipsOnFailure
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
            'tipo_id' => 1,
            'codigo_y_n_de_coleccion' => $row[0],
            'colector' => $row[1],
            'fecha_de_coleccion' => $row[2],
            'reino' => $row[3],
            'phylum_division' => $row[4],
            'clase' => $row[5],
            'orden' => $row[6],
            'familia' => $row[7],
            'genero' => $row[8],
            'especie' => $row[9],
            'variedad' => $row[10],
            'nombre_cientifico' => $row[11],
            'nombre_completo' => $row[12],
            'nombre_comun' => $row[13],
            'lugar_colecta' => $row[14],
            'provincia' => $row[15],
            'departamento' => $row[16],
            'pais' => $row[17],
            'latitud' => $row[18],
            'longitud' => $row[19],
            'altitud' => $row[20],
            'geo_lat' => $row[21],
            'geo_lon' => $row[22],
            'metodo_colecta' => $row[23],
            'identificado' => $row[24],
            'cant_ejemplares' => $row[25],
            'localizacion' => $row[26],
            'notas' => $row[27],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
