<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Evaluaciones;


class PrimerosAuxiliosController extends Controller
{
    public function registro(Request $request)
    {
        return view('primerosauxilios.registro');
    }

    public function introduccion()
    {

        return view('primerosauxilios.introduccion')->with('pagina', 'introduccion');
    }


    public function plan(Request $request)
    {
        return view('primerosauxilios.plan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function evaluacion(Request $request)
    {
        return view('primerosauxilios.revisiongeneral.evaluacion');
    }
    public function tecnicas(Request $request)
    {
        return view('primerosauxilios.revisiongeneral.tecnicas');
    }
    public function estado(Request $request)
    {
        return view('primerosauxilios.revisiongeneral.estadodeconciencia');
    }
    public function respiracion(Request $request)
    {
        return view('primerosauxilios.revisiongeneral.respiracion');
    }
    public function circulacion(Request $request)
    {
        return view('primerosauxilios.revisiongeneral.circulacion');
    }
    public function oxigenacion(Request $request)
    {
        return view('primerosauxilios.revisiongeneral.oxigenacion');
    }

    // Obtener datos del formulario evaluacion y guardar en la tabla Evaluaciones
    public function store(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();
        $evaluacion = new Evaluaciones();
        $evaluacion->respuesta1 = $request->input('respuesta1');
        $evaluacion->respuesta2 = $request->input('respuesta2');
        $evaluacion->respuesta3 = $request->input('respuesta3');
        $evaluacion->user_id = $user->id; // Asignar el user_id del usuario autenticado
        $evaluacion->save();
        return redirect('/primerosauxilios/revisiongeneral/evaluacion')
            ->with('success', 'Evaluación enviada correctamente.');
    }


    


    public function edit(string $id)
    {
    }
    

  
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
