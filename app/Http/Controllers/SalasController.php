<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Empleado;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use setasign\Fpdi\Fpdi;

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
            'sala' => 'nullable|string',
            'ciudad' => 'nullable|string',
            'fecha' => 'nullable|string',
            'cantidad' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'marca' => 'nullable|string',
            'modelo' => 'nullable|string',
            'cantdet' => 'nullable|string',
            'descripciondet' => 'nullable|string',
            'marcadet' => 'nullable|string',
            'modelodet' => 'nullable|string',
            'cantterm' => 'nullable|string',
            'descripcionterm' => 'nullable|string',
            'marcaterm' => 'nullable|string',
            'modeloterm' => 'nullable|string',
            'cantdual' => 'nullable|string',
            'descripciondual' => 'nullable|string',
            'marcadual' => 'nullable|string',
            'modelodual' => 'nullable|string',
            'cantphoto' => 'nullable|string',
            'descripcionphoto' => 'nullable|string',
            'marcaphoto' => 'nullable|string',
            'modelophoto' => 'nullable|string',
            'cantestrobo' => 'nullable|string',
            'descripcionestrobo' => 'nullable|string',
            'marcaestrobo' => 'nullable|string',
            'modeloestrobo' => 'nullable|string',


        ]);
        // Crear un nuevo objeto Empleado con los datos del formulario
        $sala = new Sala();
        $sala->nombre = $request->nombre;
        $sala->direccion = $request->direccion;
        $sala->rfc = $request->rfc;
        $sala->sala = $request->sala;
        $sala->ciudad = $request->ciudad;
        $sala->fecha = $request->fecha;
        $sala->cantidad = $request->cantidad;
        $sala->descripcion = $request->descripcion;
        $sala->marca = $request->marca;
        $sala->modelo = $request->modelo;
        $sala->cantdet = $request->cantdet;
        $sala->descripciondet = $request->descripciondet;
        $sala->marcadet = $request->marcadet;
        $sala->modelodet = $request->modelodet;
        $sala->cantdual = $request->cantdual;
        $sala->descripciondual = $request->descripciondual;
        $sala->marcadual = $request->marcadual;
        $sala->modelodual = $request->modelodual;
        $sala->cantterm = $request->cantterm;
        $sala->descripcionterm = $request->descripcionterm;
        $sala->marcaterm = $request->marcaterm;
        $sala->modeloterm = $request->modeloterm;
        $sala->cantphoto = $request->cantphoto;
        $sala->descripcionphoto = $request->descripcionphoto;
        $sala->marcaphoto = $request->marcaphoto;
        $sala->modelophoto = $request->modelophoto;
        $sala->cantestrobo = $request->cantestrobo;
        $sala->descripcionestrobo = $request->descripcionestrobo;
        $sala->marcaestrobo = $request->marcaestrobo;
        $sala->modeloestrobo = $request->modeloestrobo;


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
    public function show($id)
    {
        $sala = Sala::findOrFail($id);
        return view('salas.show', compact('sala'));
    }

    public function filterEmpleados(Request $request, $id)
    {
        $sala = Sala::findOrFail($id);
        $fecha = $request->input('fecha');

        $query = Empleado::where('sala', $sala->nombre);

        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }

        $empleados = $query->get();

        return view('salas.show', compact('sala', 'empleados'));
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
            'sala' => 'nullable|string',
            'ciudad' => 'nullable|string',
            'fecha' => 'nullable|string',
            'cantidad' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'marca' => 'nullable|string',
            'modelo' => 'nullable|string',
            'catdet' => 'nullable|string',
            'descripciondet' => 'nullable|string',
            'marcadet' => 'nullable|string',
            'modelodet' => 'nullable|string',
            'cantterm' => 'nullable|string',
            'descripcionterm' => 'nullable|string',
            'marcaterm' => 'nullable|string',
            'modeloterm' => 'nullable|string',
            'cantdual' => 'nullable|string',
            'descripciondual' => 'nullable|string',
            'marcadual' => 'nullable|string',
            'modelodual' => 'nullable|string',
            'cantphoto' => 'nullable|string',
            'descripcionphoto' => 'nullable|string',
            'marcadphoto' => 'nullable|string',
            'modelophoto' => 'nullable|string',
            'cantestrobo' => 'nullable|string',
            'descripcionestrobo' => 'nullable|string',
            'marcaestrobo' => 'nullable|string',
            'modeloestrobo' => 'nullable|string',

        ]);

        // Buscar el empleado por su ID
        $sala = Sala::find($id);


        // Verificar si se encontró el empleado
        if (!$sala) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('salas.edit')->with('error', 'Empleado no encontrado.');
        }

        // Actualizar los datos del empleado con los nuevos valores del formulario
        $sala->update([

            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'rfc' => $request->rfc,
            'sala' => $request->sala,
            'ciudad' => $request->ciudad,
            'fecha' => $request->fecha,
            'cantidad' => $request->cantidad,
            'descripcion' => $request->descripcion,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'cantdet' => $request->cantdet,
            'descripciondet' => $request->descripciondet,
            'marcadet' => $request->marcadet,
            'modelodet' => $request->modelodet,
            'cantterm' => $request->cantterm,
            'descripcionterm' => $request->descripcionterm,
            'marcaterm' => $request->marcaterm,
            'modeloterm' => $request->modeloterm,
            'cantdual' => $request->cantdual,
            'descripciondual' => $request->descripciondual,
            'marcadual' => $request->marcadual,
            'modelodual' => $request->modelodual,
            'cantphoto' => $request->cantphoto,
            'descripcionphoto' => $request->descripcionphoto,
            'marcaphoto' => $request->marcaphoto,
            'modelophoto' => $request->modelophoto,
            'cantestrobo' => $request->cantestrobo,
            'descripcionestrobo' => $request->descripcionestrobo,
            'marcaestrobo' => $request->marcaestrobo,
            'modeloestrobo' => $request->modeloestrobo,


        ]);

        return back()->with('success', 'Registro actualizado exitosamente.');
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
        return redirect()->route('salas.index')->with('success', 'Sala eliminado correctamente.');
    }




    // Certificado de Sala
    public function generateCertificate($id)
    {
        // Obtén los datos del empleado según el ID
        $sala = Sala::findOrFail($id);

        // Configura el idioma local de Carbon a español
        Carbon::setLocale('es_ES');

        // Crea el certificado PDF usando la librería PDF (dompdf, tcpdf, etc.)
        $pdf = PDF::loadView('salas.certificadosa', compact('sala'));

        // Restablece el idioma local de Carbon al valor predeterminado (opcional, dependiendo de tus necesidades)
        Carbon::setLocale(config('app.locale'));

        // Personaliza los márgenes
        $pdf->setPaper('letter', 'landscape')
            ->setOption('margin-top', '2cm')
            ->setOption('margin-right', '2cm')
            ->setOption('margin-bottom', '2cm')
            ->setOption('margin-left', '2cm');

        // Descarga el PDF con un nombre específico (por ejemplo, el nombre del empleado)
        return $pdf->setPaper('letter', 'landscape')->stream('Certificado a ' . $sala->nombre . '.pdf');
    }


    public function reportepdf(Request $request, $id)
    {
        // Encuentra la sala por ID o muestra un error si no se encuentra
        $sala = Sala::findOrFail($id);
    
        // Obtiene la fecha del request
        $fecha = $request->input('fecha');
    
        // Consulta los empleados que están en la sala específica y tienen al menos un curso en las columnas especificadas
        $query = Empleado::where('sala', $sala->nombre)
                         ->where(function ($query) {
                             $query->where('cursopa', 'like', '%Primeros Auxilios%')
                                   ->orWhere('cursobyr', 'like', '%Busqueda y Rescate%')
                                   ->orWhere('cursomyue', 'like', '%Uso y Manejo de Extintores%')
                                   ->orWhere('cursoeyr', 'like', '%Procedimientos de Evacuacion%');
                         });
    
        // Si se proporciona una fecha, filtra los empleados por esa fecha
        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }
    
        // Obtiene los empleados que coinciden con la consulta
        $empleados = $query->get();
    
        // Carga la vista para el PDF con los datos necesarios y establece la orientación de la hoja
        $pdf = Pdf::loadView('salas.reportecursos', compact('sala', 'empleados'))
                  ->setPaper('letter', 'landscape'); // Orientación horizontal
    
        // Envía el PDF al navegador para su descarga o visualización
        return $pdf->stream('Unidad_Interna_de_Cursos_' . $sala->nombre . '.pdf');
    }
    

    public function certificadosui(Request $request, $id)
    {
        // Encuentra la sala por ID o muestra un error si no se encuentra
        $sala = Sala::findOrFail($id);
    
        // Obtiene la fecha del request
        $fecha = $request->input('fecha');
    
        // Consulta los empleados que están en la sala específica y tienen al menos un curso en las columnas especificadas
        $query = Empleado::where('sala', $sala->nombre)
                         ->where(function ($query) {
                             $query->where('cursopa', 'like', '%Primeros Auxilios%')
                                   ->orWhere('cursobyr', 'like', '%Busqueda y Rescate%')
                                   ->orWhere('cursomyue', 'like', '%Uso y Manejo de Extintores%')
                                   ->orWhere('cursoeyr', 'like', '%Procedimientos de Evacuacion%');
                         });
    
        // Si se proporciona una fecha, filtra los empleados por esa fecha
        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }
    
        // Obtiene los empleados que coinciden con la consulta
        $empleados = $query->get();
    
        // Carga la vista para el PDF con los datos necesarios y establece la orientación de la hoja
        $pdf = Pdf::loadView('salas.certificadosui', compact('sala', 'empleados'))
                  ->setPaper('letter', 'landscape'); // Orientación horizontal
    
        // Envía el PDF al navegador para su descarga o visualización
        return $pdf->stream('reporte_de_Cursos_' . $sala->id . '.pdf');
    }
    



    public function certificadosPA(Request $request, $id)
    {
        // Encuentra la sala por ID o muestra un error si no se encuentra
        $sala = Sala::findOrFail($id);

        // Obtiene la fecha del request
        $fecha = $request->input('fecha');

        // Consulta los empleados que están en la sala específica y tienen el curso "Primeros Auxilios"
        $query = Empleado::where('sala', $sala->nombre)
            ->where('cursopa', 'Primeros Auxilios');

        // Si se proporciona una fecha, filtra los empleados por esa fecha
        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }

        // Obtiene los empleados que coinciden con la consulta
        $empleados = $query->get();

        // Verifica si hay empleados
        if ($empleados->isEmpty()) {
            return response()->json(['message' => 'No se encontraron empleados para los criterios dados.'], 404);
        }

        // Carga la vista para el PDF con los datos necesarios y establece la orientación de la hoja
        $pdf = Pdf::loadView('salas.certificadospa', compact('sala', 'empleados'))
            ->setPaper('letter', 'landscape') // Orientación horizontal
            ->setOption('margin-top', '2cm')
            ->setOption('margin-right', '2cm')
            ->setOption('margin-bottom', '2cm')
            ->setOption('margin-left', '2cm'); // Personaliza los márgenes

        // Envía el PDF al navegador para su descarga o visualización
        return $pdf->stream('constancias_empleados.pdf');
    }



    public function certificadosBYR(Request $request, $id)
    {
        // Encuentra la sala por ID o muestra un error si no se encuentra
        $sala = Sala::findOrFail($id);

        // Obtiene la fecha del request
        $fecha = $request->input('fecha');

        // Consulta los empleados que están en la sala específica y tienen el curso "Primeros Auxilios"
        $query = Empleado::where('sala', $sala->nombre)
            ->where('cursobyr', 'Busqueda y Rescate');

        // Si se proporciona una fecha, filtra los empleados por esa fecha
        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }

        // Obtiene los empleados que coinciden con la consulta
        $empleados = $query->get();

        // Verifica si hay empleados
        if ($empleados->isEmpty()) {
            return response()->json(['message' => 'No se encontraron empleados para los criterios dados.'], 404);
        }

        // Carga la vista para el PDF con los datos necesarios y establece la orientación de la hoja
        $pdf = Pdf::loadView('salas.certificadosbyr', compact('sala', 'empleados'))
            ->setPaper('letter', 'landscape') // Orientación horizontal
            ->setOption('margin-top', '2cm')
            ->setOption('margin-right', '2cm')
            ->setOption('margin-bottom', '2cm')
            ->setOption('margin-left', '2cm'); // Personaliza los márgenes

        // Envía el PDF al navegador para su descarga o visualización
        return $pdf->stream('constancias_empleados.pdf');
    }

    public function certificadosmyue(Request $request, $id)
    {
        // Encuentra la sala por ID o muestra un error si no se encuentra
        $sala = Sala::findOrFail($id);

        // Obtiene la fecha del request
        $fecha = $request->input('fecha');

        // Consulta los empleados que están en la sala específica y tienen el curso "Primeros Auxilios"
        $query = Empleado::where('sala', $sala->nombre)
            ->where('cursomyue', 'Uso y Manejo de Extintores');

        // Si se proporciona una fecha, filtra los empleados por esa fecha
        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }

        // Obtiene los empleados que coinciden con la consulta
        $empleados = $query->get();

        // Verifica si hay empleados
        if ($empleados->isEmpty()) {
            return response()->json(['message' => 'No se encontraron empleados para los criterios dados.'], 404);
        }

        // Carga la vista para el PDF con los datos necesarios y establece la orientación de la hoja
        $pdf = Pdf::loadView('salas.certificadosmyue', compact('sala', 'empleados'))
            ->setPaper('letter', 'landscape') // Orientación horizontal
            ->setOption('margin-top', '2cm')
            ->setOption('margin-right', '2cm')
            ->setOption('margin-bottom', '2cm')
            ->setOption('margin-left', '2cm'); // Personaliza los márgenes

        // Envía el PDF al navegador para su descarga o visualización
        return $pdf->stream('constancias_empleados.pdf');
    }

    public function certificadoseyr(Request $request, $id)
    {
        // Encuentra la sala por ID o muestra un error si no se encuentra
        $sala = Sala::findOrFail($id);

        // Obtiene la fecha del request
        $fecha = $request->input('fecha');

        // Consulta los empleados que están en la sala específica y tienen el curso "Primeros Auxilios"
        $query = Empleado::where('sala', $sala->nombre)
            ->where('cursoeyr', 'Procedimientos de Evacuacion', 'Evacuacion y Rescate');

        // Si se proporciona una fecha, filtra los empleados por esa fecha
        if ($fecha) {
            $query->whereDate('created_at', $fecha);
        }

        // Obtiene los empleados que coinciden con la consulta
        $empleados = $query->get();

        // Verifica si hay empleados
        if ($empleados->isEmpty()) {
            return response()->json(['message' => 'No se encontraron empleados para los criterios dados.'], 404);
        }

        // Carga la vista para el PDF con los datos necesarios y establece la orientación de la hoja
        $pdf = Pdf::loadView('salas.certificadoseyr', compact('sala', 'empleados'))
            ->setPaper('letter', 'landscape') // Orientación horizontal
            ->setOption('margin-top', '2cm')
            ->setOption('margin-right', '2cm')
            ->setOption('margin-bottom', '2cm')
            ->setOption('margin-left', '2cm'); // Personaliza los márgenes

        // Envía el PDF al navegador para su descarga o visualización
        return $pdf->stream('constancias_empleados.pdf');
    }
}
