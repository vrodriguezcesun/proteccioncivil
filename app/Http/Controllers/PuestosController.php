<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puesto;

class PuestosController extends Controller
{
    public function index(Request $request)
    {
        // Obtener el texto de búsqueda del formulario
        $texto = $request->input('texto');

        // Consultar empleados filtrados si se proporciona un texto de búsqueda
        // De lo contrario, obtener todos los empleados paginados
        $puestos = $texto ? Puesto::where('nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('empleado', 'LIKE', '%' . $texto . '%')

            ->orWhere('puesto', 'LIKE', '%' . $texto . '%')


            : Puesto::paginate(10000);

        // Retornar la vista con los empleados filtrados o paginados
        return view('puestos.index', compact('puestos'));
    }
    public function create()
    {   // Obtener todas las salas disponibles
        $puestos = Puesto::all();

        // Devolver la vista con las salas y el empleado
        return view('puestos.create', compact('puestos'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([

            'nombre' => 'required|string',

        ]);
        // Crear un nuevo objeto Empleado con los datos del formulario
        $puesto = new Puesto();

        $puesto->nombre = $request->nombre;


        // Guardar el objeto en la base de datos
        $puesto->save();
        // Iniciar la sesión 'success'
        session()->flash('success', 'Registro guardado correctamente');
        // Redireccionar a una ruta específica o mostrar un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto creado exitosamente.');
    }
    public function edit($id)
    {
        $puesto = Puesto::findOrFail($id);
        return view('puestos.edit', compact('puesto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'nullable|string',
        ]);

        $puesto = Puesto::findOrFail($id);
        $puesto->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado correctamente.');
    }
    public function destroy(string $id)
    {
        // Buscar el empleado por su ID
        $puesto = Puesto::find($id);

        // Verificar si se encontró el empleado
        if (!$puesto) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('puestos.index')->with('error', 'Empleado no encontrado.');
        }

        // Eliminar el empleado de la base de datos
        $puesto->delete();

        // Redirigir a la página de empleados con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Empleado eliminado correctamente.');
    }
}
