@extends('layouts.plantilla');

@section('contenido')
 <a href="project/create" class="btn btn-primary">CREAR</a>
 <a href="/pdf" class="btn btn-secondary btn-group">Generar PDF</a>

<table class="table table-dark table-striped mt -4">
<thead>
    <tr>
         <th><strong>id Proyecto</strong></th>
         <th><strong>Nombre</strong></th>
         <th><strong>Fuente</strong></th>
         <th><strong>Monto Planificado</strong></th>
         <th><strong>Monto Patrocinado</strong></th>
         <th><strong>Fondos Propios</strong></th>
         <th><strong>Acciones</strong></th>
    </tr>
</thead>
<tbody>
    @foreach ($project as $project)
       <tr>
        <td>{{$project->id}}</td>
        <td>{{$project->NombreProyecto}}</td>
        <td>{{$project->FuenteFondos}}</td>
        <td>{{$project->MontoPlanificado}}</td>
        <td>{{$project->MontoPatrocinado}}</td>
        <td>{{$project->MontoFondosPropios}}</td>
        <td>
            <form action="{{ route ('project.destroy',$project->id)}}" method="POST">
              <a href="/project/{{ $project->id}}/edit" class="btn btn-info">Editar</a>
              @csrf
              @method ('DELETE')
               <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>

        </td>
       </tr>
    @endforeach
    
</tbody>
</table>

@endsection