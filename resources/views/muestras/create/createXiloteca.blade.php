@extends('blank')
@section('contend')

<div class="row">
    <div class="col-12">
        <form>

        <div class="card">
            <div class="card-header">
                <h5>Registrar colección de {{$tipo->nombre}}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Colección</label>
                            <input type="text" class="form-control" placeholder="Colección" name="tipo_id">
                        </div>
                        <div class="form-group">
                            <label>Código y N° de colección</label>
                            <input type="text" class="form-control" placeholder="Código y N° de colección" name="codigo_y_n_de_coleccion" required>
                        </div>
                        <div class="form-group">
                            <label>Colector</label>
                            <input type="text" class="form-control" placeholder="Colector" name="colector">
                        </div>
                        {{-- <div class="form-group">
                            <label>Procesado por</label>
                            <input type="text" class="form-control" placeholder="Procesado por" name="procesado">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Muestra de respaldo</label>
                            <input type="text" class="form-control" placeholder="Muestra de respaldo" name="muestra_respaldo">
                        </div> --}}
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="text" class="form-control" placeholder="Fecha" name="fecha_de_coleccion">
                        </div>
                        <div class="form-group">
                            <label>Reino</label>
                            <input type="text" class="form-control" placeholder="Reino" name="reino">
                        </div>
                        <div class="form-group">
                            <label>Phylum/Division</label>
                            <input type="text" class="form-control" placeholder="Phylum/Division" name="phylum_division">
                        </div>
                        <div class="form-group">
                            <label>Clase</label>
                            <input type="text" class="form-control" placeholder="Clase" name="clase">
                        </div>
                        <div class="form-group">
                            <label>Orden</label>
                            <input type="text" class="form-control" placeholder="Orden" name="orden">
                        </div>
                        <div class="form-group">
                            <label>Familia</label>
                            <input type="text" class="form-control" placeholder="Familia" name="familia">
                        </div>
                        <div class="form-group">
                            <label>Subfamilia</label>
                            <input type="text" class="form-control" placeholder="Subfamilia" name="subfamilia">
                        </div>
                        <div class="form-group">
                            <label>Género</label>
                            <input type="text" class="form-control" placeholder="Género" name="genero">
                        </div>
                        <div class="form-group">
                            <label>Especie</label>
                            <input type="text" class="form-control" placeholder="Especie" name="especie">
                        </div>
                        <div class="form-group">
                            <label>Variedad</label>
                            <input type="text" class="form-control" placeholder="Variedad" name="variedad">
                        </div>
                        {{-- <div class="form-group">
                            <label>Epíteto específico</label>
                            <input type="text" class="form-control" placeholder="Epíteto específico" name="epiteto_especifico">
                        </div> --}}
                        <div class="form-group">
                            <label>Nombre científico</label>
                            <input type="text" class="form-control" placeholder="Nombre científico" name="nombre_cientifico">
                        </div>
                        <div class="form-group">
                            <label>Nombre completo</label>
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombre_completo">
                        </div>
                        <div class="form-group">
                            <label>Nombre común</label>
                            <input type="text" class="form-control" placeholder="Nombre común" name="nombre_comun">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Lugar colecta</label>
                            <input type="text" class="form-control" placeholder="Lugar colecta" name="lugar_colecta">
                        </div>
                        <div class="form-group">
                            <label>Provincia</label>
                            <input type="text" class="form-control" placeholder="Provincia" name="provincia">
                        </div>
                        <div class="form-group">
                            <label>Departamento</label>
                            <input type="text" class="form-control" placeholder="Departamento" name="departamento">
                        </div>
                        <div class="form-group">
                            <label>País</label>
                            <input type="text" class="form-control" placeholder="País" name="pais">
                        </div>
                        {{-- <div class="form-group">
                            <label>Datum</label>
                            <input type="text" class="form-control" placeholder="Datum" name="datum">
                        </div> --}}
                        <div class="form-group">
                            <label>Latitud</label>
                            <input type="text" class="form-control" placeholder="Latitud" name="latitud">
                        </div>
                        <div class="form-group">
                            <label>Longitud</label>
                            <input type="text" class="form-control" placeholder="Longitud" name="longitud">
                        </div>
                        <div class="form-group">
                            <label>Altitud</label>
                            <input type="text" class="form-control" placeholder="Altitud" name="altitud">
                        </div>
                        <div class="form-group">
                            <label>geo_lat</label>
                            <input type="text" class="form-control" placeholder="geo_lat" name="geo_lat">
                        </div>
                        <div class="form-group">
                            <label>geo_lon</label>
                            <input type="text" class="form-control" placeholder="geo_lon" name="geo_lon">
                        </div>
                        {{-- <div class="form-group">
                            <label>Área protegida</label>
                            <input type="text" class="form-control" placeholder="Área protegida" name="area_protegida">
                        </div> --}}
                        <div class="form-group">
                            <label>Método colecta</label>
                            <input type="text" class="form-control" placeholder="Método colecta" name="metodo_colecta">
                        </div>
                        <div class="form-group">
                            <label>Identificado por</label>
                            <input type="text" class="form-control" placeholder="Identificado por" name="identificado">
                        </div>
                        {{-- <div class="form-group">
                            <label>Tipo de registro</label>
                            <input type="text" class="form-control" placeholder="Tipo de registro" name="tipo_registro">
                        </div> --}}
                        <div class="form-group">
                            <label>Cantidad de ejemplares</label>
                            <input type="text" class="form-control" placeholder="Cantidad de ejemplares" name="cant_ejemplares">
                        </div>
                        <div class="form-group">
                            <label>Localización</label>
                            <input type="text" class="form-control" placeholder="Localización" name="localizacion">
                        </div>
                        {{-- <div class="form-group">
                            <label>Sexo</label>
                            <input type="text" class="form-control" placeholder="Sexo" name="sexo">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Edad</label>
                            <input type="text" class="form-control" placeholder="Edad" name="edad">
                        </div> --}}
                        <div class="form-group">
                            <label>Notas</label>
                            <textarea class="form-control" rows="3" placeholder="Notas" name="notas"></textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label>Agrupación</label>
                            <input type="text" class="form-control" placeholder="Agrupación" name="agrupacion">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Tamaño grano v.p. μ</label>
                            <input type="text" class="form-control" placeholder="Tamaño grano v.p. μ" name="tamanho_vp">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Tamaño grano v.e. μ</label>
                            <input type="text" class="form-control" placeholder="Tamaño grano v.e. μ" name="tamanho_ve">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Forma</label>
                            <input type="text" class="form-control" placeholder="Forma" name="forma">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Aperturas</label>
                            <input type="text" class="form-control" placeholder="Aperturas" name="apertura">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Ornamentación</label>
                            <input type="text" class="form-control" placeholder="Ornamentación" name="ornamentacion">
                        </div> --}}
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn  btn-primary">Registrar Muestra</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>
</div>
    
@endsection