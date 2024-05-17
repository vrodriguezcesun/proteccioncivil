<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('primerosauxilios.registro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empleados = new Empleado();
        return view('empleados.create', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Validar los datos del formulario
          $request->validate([
            'empleado' => 'required|numeric',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'Ocupation' => 'required|string',
            'Sala' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
        ]);
        // Crear un nuevo objeto Empleado con los datos del formulario
        $empleado = new Empleado();
        $empleado->empleado = $request->empleado;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellidos;
        $empleado->puesto = $request->Ocupation;
        $empleado->sala = $request->Sala;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;

        // Guardar el objeto en la base de datos
        $empleado->save();

      
        return redirect('/primerosauxilios/introduccion')
        ->with('success', 'Evaluación enviada correctamente.');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
