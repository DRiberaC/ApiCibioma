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
            //'coleccion'=>$this->tipo->nombre,
            'codigo_y_n_de_coleccion'=>$this->codigo_y_n_de_coleccion,
            //'colector'=>$this->colector,
            //'procesado'=>$this->procesado,
            //'muestra_respaldo'=>$this->muestra_respaldo,
            //'fecha'=>$this->fecha_de_coleccion,
            //'reino'=>$this->reino,
            //'phylum_division'=>$this->phylum_division,
            //'clase'=>$this->clase,
            //'orden'=>$this->orden,
            'familia'=>$this->familia,
            //'subfamilia'=>$this->subfamilia,
            //'genero'=>$this->genero,
            //'especie'=>$this->especie,
            //'variedad'=>$this->variedad,
            //'epiteto_especifico'=>$this->epiteto_especifico,
            'nombre_cientifico'=>"$this->genero $this->especie",
            //'nombre_completo'=>$this->nombre_completo,
            //'nombre_comun'=>$this->nombre_comun,
            'lugar_colecta'=>$this->lugar_colecta,
            //'provincia'=>$this->provincia,
            'departamento'=>$this->departamento,
            //'pais'=>$this->pais,
            //'datum'=>$this->datum,
            //'latitud'=>$this->latitud,
            //'longitud'=>$this->longitud,
            //'altitud'=>$this->altitud,
            //'geo_lat'=>$this->geo_lat,
            //'geo_lon'=>$this->geo_lon,
            //'area_protegida'=>$this->area_protegida,
            //'metodo_colecta'=>$this->metodo_colecta,
            //'identificado'=>$this->identificado,
            //'tipo_registro'=>$this->tipo_registro,
            //'cant_ejemplares'=>$this->cant_ejemplares,
            //'localizacion'=>$this->localizacion,
            //'sexo'=>$this->sexo,
            //'edad'=>$this->edad,
            //'notas'=>$this->notas,
            //'agrupacion'=>$this->agrupacion,
            //'tamanho_vp'=>$this->tamanho_vp,
            //'tamanho_ve'=>$this->tamanho_ve,
            //'forma'=>$this->forma,
            //'apertura'=>$this->apertura,
            //'ornamentacion'=>$this->ornamentacion,
        ];
        /*
                return [
                    'Colecci??n'=>$this->tipo->nombre,
                    'C??digo y N?? de colecci??n'=>$this->codigo_y_n_de_coleccion,
                    'Colector'=>$this->colector,
                    'Procesado por'=>$this->procesado,
                    'Muestra de respaldo'=>$this->muestra_respaldo,
                    'Fecha'=>$this->fecha_de_coleccion,
                    'Reino'=>$this->reino,
                    'Phylum/Division'=>$this->phylum_division,
                    'Clase'=>$this->clase,
                    'Orden'=>$this->orden,
                    'Familia'=>$this->familia,
                    'Subfamilia'=>$this->subfamilia,
                    'G??nero'=>$this->genero,
                    'Especie'=>$this->especie,
                    'Variedad'=>$this->variedad,
                    'Ep??teto espec??fico'=>$this->epiteto_especifico,
                    'Nombre cient??fico'=>$this->nombre_cientifico,
                    'Nombre completo'=>$this->nombre_completo,
                    'Nombre com??n'=>$this->nombre_comun,
                    'Lugar colecta'=>$this->lugar_colecta,
                    'Provincia'=>$this->provincia,
                    'Departamento'=>$this->departamento,
                    'Pa??s'=>$this->pais,
                    'Datum'=>$this->datum,
                    'Latitud'=>$this->latitud,
                    'Longitud'=>$this->longitud,
                    'Altitud'=>$this->altitud,
                    'geo_lat'=>$this->geo_lat,
                    'geo_lon'=>$this->geo_lon,
                    '??rea protegida'=>$this->area_protegida,
                    'M??todo colecta'=>$this->metodo_colecta,
                    'Identificado por'=>$this->identificado,
                    'Tipo de registro'=>$this->tipo_registro,
                    'Cantidad de ejemplares'=>$this->cant_ejemplares,
                    'Localizaci??n'=>$this->localizacion,
                    'Sexo'=>$this->sexo,
                    'Edad'=>$this->edad,
                    'Notas'=>$this->notas,
                    'Agrupaci??n'=>$this->agrupacion,
                    'Tama??o grano v.p. ??'=>$this->tamanho_vp,
                    'Tama??o grano v.e. ??'=>$this->tamanho_ve,
                    'Forma'=>$this->forma,
                    'Aperturas'=>$this->apertura,
                    'Ornamentaci??n'=>$this->ornamentacion,
                ];
                 */
    }
}
