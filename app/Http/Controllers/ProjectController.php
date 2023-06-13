<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use PDF;
use Illuminate\Support\Facades\App;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function getPDF(){

        $project = Project::all();
        $name = "Curso de Laravel y PHP";
        $institution = "Prueba de Generar PDF - Ministerio de Cultura";
        $date = "13/06/2023";

        $pdf = App::make('dompdf.wrapper');
        $html = '<h4>' . $name . '</h4>
         <h4>' . $institution . '</h4>
         <h4>' . $date . '</h4>
         <table style="border: 1px solid black">
            <thead>
                <tr>
                    <th scope="col" style="border: 1px solid black">#</th>
                    <th scope="col" style="border: 1px solid black">Nombre Proyecto</th>
                    <th scope="col" style="border: 1px solid black">Fuente Fondos</th>
                    <th scope="col" style="border: 1px solid black">Monto Planificado</th>
                    <th scope="col" style="border: 1px solid black">Monto Patrocinado</th>
                    <th scope="col" style="border: 1px solid black">Monto Fondos Propios</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($project as $project) {
            $html .= '
                <tr>
                    <td style="border: 1px solid black">' . $project->id . '</td>
                    <td style="border: 1px solid black">' . $project->NombreProyecto . '</td>
                    <td style="border: 1px solid black"> ' . $project->FuenteFondos . '</td>
                    <td style="border: 1px solid black">' . $project->MontoPlanificado . '</td>
                    <td style="border: 1px solid black"> ' . $project->MontoPatrocinado . '</td>
                    <td style="border: 1px solid black">' . $project->MontoFondosPropios . '</td>
                </tr>';
        }

        $html .= '</tbody>
        </table>';

        $pdf->loadHTML($html);
        return $pdf->stream('prueba.pdf', $name);

     }

    public function index()
    {
        $project=Project::all();
        return view('project.index')->with('project',$project);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->NombreProyecto = $request->get('NombreProyecto');
        $project->FuenteFondos = $request->get('FuenteFondos');
        $project->MontoPlanificado = $request->get('MontoPlanificado');
        $project->MontoPatrocinado = $request->get('MontoPatrocinado');
        $project->MontoFondosPropios = $request->get('MontoFondosPropios');

        $project->save();

        return redirect('/project');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=Project::find($id);
        return view('project.edit')->with('project',$project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);
        $project->NombreProyecto = $request->get('NombreProyecto');
        $project->FuenteFondos = $request->get('FuenteFondos');
        $project->MontoPlanificado = $request->get('MontoPlanificado');
        $project->MontoPatrocinado = $request->get('MontoPatrocinado');
        $project->MontoFondosPropios = $request->get('MontoFondosPropios');

        $project->save();

        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/project');
    }
}
