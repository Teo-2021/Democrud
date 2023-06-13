@extends('layouts.plantilla');

@section('contenido')
    <h2>Adicionar Registros</h2>
    <form action="/project" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Proyecto</label>
            <input id="NombreProyecto" name="NombreProyecto" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fuente Fondos</label>
            <input id="FuenteFondos" name="FuenteFondos" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Monto Planificado</label>
            <input id="MontoPlanificado" name="MontoPlanificado" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Monto Patrocinado</label>
            <input id="MontoPatrocinado" name="MontoPatrocinado" type="text" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Monto Fondos Propios</label>
            <input id="MontoFondosPropios" name="MontoFondosPropios" type="text" class="form-control" tabindex="5">
        </div>
        <a href="/project" class="btn btn-secundary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

    </form>
@endsection