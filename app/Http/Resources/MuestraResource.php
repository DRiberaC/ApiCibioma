<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MuestraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'coleccion'=>$this->tipo->nombre,
            'codigo_y_n_de_coleccion'=>$this->codigo_y_n_de_coleccion,
            'colector'=>$this->colector,
            'procesado'=>$this->procesado,
            'muestra_respaldo'=>$this->muestra_respaldo,
            'fecha'=>$this->fecha_de_coleccion,
            'reino'=>$this->reino,
            'phylum_division'=>$this->phylum_division,
            'clase'=>$this->clase,
            'orden'=>$this->orden,
            'familia'=>$this->familia,
            'subfamilia'=>$this->subfamilia,
            'genero'=>$this->genero,
            'especie'=>$this->especie,
            'variedad'=>$this->variedad,
            'epiteto_especifico'=>$this->epiteto_especifico,
            'nombre_cientifico'=>$this->nombre_cientifico,
            'nombre_completo'=>$this->nombre_completo,
            'nombre_comun'=>$this->nombre_comun,
            'lugar_colecta'=>$this->lugar_colecta,
            'provincia'=>$this->provincia,
            'departamento'=>$this->departamento,
            'pais'=>$this->pais,
            'latitud'=>$this->latitud,
            'longitud'=>$this->longitud,
            'datum'=>$this->datum,
            'altitud'=>$this->altitud,
            'geo_lat'=>$this->geo_lat,
            'geo_lon'=>$this->geo_lon,
            'area_protegida'=>$this->area_protegida,
            'metodo_colecta'=>$this->metodo_colecta,
            'identificado'=>$this->identificado,
            'tipo_registro'=>$this->tipo_registro,
            'cant_ejemplares'=>$this->cant_ejemplares,
            'localizacion'=>$this->localizacion,
            'sexo'=>$this->sexo,
            'edad'=>$this->edad,
            'notas'=>$this->notas,
            'agrupacion'=>$this->agrupacion,
            'tamanho_vp'=>$this->tamanho_vp,
            'tamanho_ve'=>$this->tamanho_ve,
            'forma'=>$this->forma,
            'apertura'=>$this->apertura,
            'ornamentacion'=>$this->ornamentacion,
        ];
        /*
                return [
                    'Colección'=>$this->tipo->nombre,
                    'Código y N° de colección'=>$this->codigo_y_n_de_coleccion,
                    'Colector'=>$this->colector,
                    'Procesado por'=>$this->procesado,
                    'Muestra de respaldo'=>$this->muestra_respaldo,
                    'Fecha'=>$this->fecha_de_coleccion,
                    'Reino'=>$this->reino,
                    'Phylum/Division'=>$this->phylum_division,
                    'Clase'=>$this->clase,
                    'Clase'=>$this->orden,
                    'Familia'=>$this->familia,
                    'Subfamilia'=>$this->subfamilia,
                    'Género'=>$this->genero,
                    'Especie'=>$this->especie,
                    'Variedad'=>$this->variedad,
                    'Epíteto específico'=>$this->epiteto_especifico,
                    'Nombre científico'=>$this->nombre_cientifico,
                    'Nombre completo'=>$this->nombre_completo,
                    'Nombre común'=>$this->nombre_comun,
                    'Lugar colecta'=>$this->lugar_colecta,
                    'Provincia'=>$this->provincia,
                    'Departamento'=>$this->departamento,
                    'País'=>$this->pais,
                    'Latitud'=>$this->latitud,
                    'Longitud'=>$this->longitud,
                    'Datum'=>$this->datum,
                    'Altitud'=>$this->altitud,
                    'geo_lat'=>$this->geo_lat,
                    'geo_lon'=>$this->geo_lon,
                    'Área protegida'=>$this->area_protegida,
                    'Método colecta'=>$this->metodo_colecta,
                    'Identificado por'=>$this->identificado,
                    'Tipo de registro'=>$this->tipo_registro,
                    'Cantidad de ejemplares'=>$this->cant_ejemplares,
                    'Localización'=>$this->localizacion,
                    'Sexo'=>$this->sexo,
                    'Edad'=>$this->edad,
                    'Notas'=>$this->notas,
                    'Agrupación'=>$this->agrupacion,
                    'Tamaño grano v.p. μ'=>$this->tamanho_vp,
                    'Tamaño grano v.e. μ'=>$this->tamanho_ve,
                    'Forma'=>$this->forma,
                    'Aperturas'=>$this->apertura,
                    'Ornamentación'=>$this->ornamentacion,
                ];
                 */
    }
}
