@extends('layouts.plantilla');

@section('contenido')
    <h2>Editar Registros</h2>
    <form action="/project/{{$project->id}}" method="POST">
        @csrf
        @method("PUT");
        <div class="mb-3">
            <label for="" class="form-label">Nombre Proyecto</label>
            <input id="NombreProyecto" name="NombreProyecto" type="text" class="form-control" value="{{$project->NombreProyecto}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fuente Fondos</label>
            <input id="FuenteFondos" name="FuenteFondos" type="text" class="form-control" value="{{$project->FuenteFondos}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Monto Planificado</label>
            <input id="MontoPlanificado" name="MontoPlanificado" type="text" class="form-control" value="{{$project->MontoPlanificado}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Monto Patrocinado</label>
            <input id="MontoPatrocinado" name="MontoPatrocinado" type="text" class="form-control" value="{{$project->MontoPatrocinado}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Monto Fondos Propios</label>
            <input id="MontoFondosPropios" name="MontoFondosPropios" type="text" class="form-control" value="{{$project->MontoFondosPropios}}">
        </div>
        <a href="/project" class="btn btn-secundary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

    </form>
@endsection