<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener el texto de búsqueda del formulario
        $texto = $request->input('texto');

        // Consultar empleados filtrados si se proporciona un texto de búsqueda
        // De lo contrario, obtener todos los empleados paginados
        $salas = $texto ? Sala::where('nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('empleado', 'LIKE', '%' . $texto . '%')


            : Sala::paginate(10000);

        // Retornar la vista con los empleados filtrados o paginados
        return view('salas.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salas = Sala::all();

        // Inicializar una nueva instancia de Empleado
        $sala = new Sala();

        // Devolver la vista con las salas y el empleado
        return view('salas.create', compact('salas'));
    }


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'direccion' => 'nullable|string',
            'rfc' => 'nullable|string',
          
        ]);
        // Crear un nuevo objeto Empleado con los datos del formulario
        $sala = new Sala();
        $sala->nombre = $request->nombre;
        $sala->direccion = $request->direccion;
        $sala->rfc = $request->rfc;
        // Guardar el objeto en la base de datos
        $sala->save();
        // Iniciar la sesión 'success'
        session()->flash('success', 'Registro guardado correctamente');
        // Redireccionar a una ruta específica o mostrar un mensaje de éxito
        return redirect()->route('salas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $sala = Sala::find($id);


        return view('salas.edit', compact('sala'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'nullable|string',
            'direccion' => 'nullable|string',
            'rfc' => 'nullable|string',



        ]);

        // Buscar el empleado por su ID
        $sala = Sala::find($id);


        // Verificar si se encontró el empleado
        if (!$sala) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('salas.index')->with('error', 'Empleado no encontrado.');
        }

        // Actualizar los datos del empleado con los nuevos valores del formulario
        $sala->update([

            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'rfc' => $request->rfc,



        ]);

        return redirect()->route('salas.index');
    }



    public function destroy(string $id)
    {
        // Buscar el empleado por su ID
        $sala = Sala::find($id);

        // Verificar si se encontró el empleado
        if (!$sala) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('salas.index')->with('error', 'Empleado no encontrado.');
        }

        // Eliminar el empleado de la base de datos
        $sala->delete();

        // Redirigir a la página de empleados con un mensaje de éxito
        return redirect()->route('salas.index')->with('success', 'Empleado eliminado correctamente.');
    }
}
