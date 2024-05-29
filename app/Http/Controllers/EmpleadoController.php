<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Puesto;
use App\Models\Sala;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class EmpleadoController extends Controller
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
        $empleados = $texto ? Empleado::where('nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('empleado', 'LIKE', '%' . $texto . '%')
            
            ->orWhere('puesto', 'LIKE', '%' . $texto . '%')
            ->orWhere('sala', 'LIKE', '%' . $texto . '%')
            ->orWhere('created_at', 'LIKE', '%' . $texto . '%')
          
            : Empleado::paginate(10000);

        // Retornar la vista con los empleados filtrados o paginados
        return view('empleados.index', compact('empleados'));
    }


    public function create()
    {   // Obtener todas las salas disponibles
        $puestos = Puesto::all();
        
       // Obtener todas las salas disponibles
        $salas = Sala::all();
        
        // Inicializar una nueva instancia de Empleado
        $empleado = new Empleado();
        
        // Devolver la vista con las salas y el empleado
        return view('empleados.create', compact('salas', 'empleado','puestos'));
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
            'puesto' => 'required|string',
            'sala' => 'required|string',
            'email' => 'required|email',
            'curp' => 'nullable|string',
            'telefono' => 'nullable|string',
            'cursopa' => 'nullable|string',
            'cursopai' => 'nullable|string',
            'cursopaf' => 'nullable|string',
            'ciudadpa' => 'nullable|string',
            'cursobyr' => 'nullable|string',
            'cursobyri' => 'nullable|string',
            'cursobyrf' => 'nullable|string',
            'ciudadbyr' => 'nullable|string',
            'cursomyue' => 'nullable|string',
            'cursomyuei' => 'nullable|string',
            'cursomyuef' => 'nullable|string',
            'ciudadmyuef' => 'nullable|string',
            'cursoeyr' => 'nullable|string',
            'cursoeyri' => 'nullable|string',
            'cursoeyrf' => 'nullable|string',
            'ciudadeyr' => 'nullable|string',


        ]);
        // Crear un nuevo objeto Empleado con los datos del formulario
        $empleado = new Empleado();
        $empleado->empleado = $request->empleado;
        $empleado->nombre = $request->nombre;
        $empleado->puesto = $request->puesto;
        $empleado->sala = $request->sala;
        $empleado->email = $request->email;
        $empleado->curp = $request->curp;
        $empleado->telefono = $request->telefono;
        $empleado->cursopa = $request->cursopa;
        $empleado->cursopai = $request->cursopai;
        $empleado->cursopaf = $request->cursopaf;
        $empleado->ciudadpa = $request->ciudadpa;
        $empleado->cursobyr = $request->cursobyr;
        $empleado->cursobyri = $request->cursobyri;
        $empleado->cursobyrf = $request->cursobyrf;
        $empleado->ciudadbyr = $request->ciudadbyr;
        $empleado->cursomyue = $request->cursomyue;
        $empleado->cursomyuei = $request->cursomyuei;
        $empleado->cursomyuef = $request->cursomyuef;
        $empleado->ciudadmyue = $request->ciudadmyue;
        $empleado->cursoeyr = $request->cursoeyr;
        $empleado->cursoeyri = $request->cursoeyri;
        $empleado->cursoeyrf = $request->cursoeyrf;
        $empleado->ciudadeyr = $request->ciudadeyr;

        // Guardar el objeto en la base de datos
        $empleado->save();
        // Iniciar la sesión 'success'
        session()->flash('success', 'Registro guardado correctamente');
        // Redireccionar a una ruta específica o mostrar un mensaje de éxito
        return redirect()->route('empleados.index')->with('success', 'Empleado creado exitosamente.');
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
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $puestos = Puesto::all(); // Obtener todos los puestos disponibles
        $salas = Sala::all();

        return view('empleados.edit', compact('empleado','puestos','salas'));
    }


    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'empleado' => 'nullable|numeric',
            'nombre' => 'nullable|string',
            'puesto' => 'nullable|string',
            'sala' => 'nullable|string',
            'email' => 'nullable|email',
            'curp' => 'nullable|string',
            'telefono' => 'nullable|string',
            'cursopa' => 'nullable|string',
            'cursopai' => 'nullable|string',
            'cursopaf' => 'nullable|string',
            'ciudadpa' => 'nullable|string',
            'cursobyr' => 'nullable|string',
            'cursobyri' => 'nullable|string',
            'cursobyrf' => 'nullable|string',
            'ciudadbyr' => 'nullable|string',
            'cursomyue' => 'nullable|string',
            'cursomyuei' => 'nullable|string',
            'cursomyuef' => 'nullable|string',
            'ciudadmyue' => 'nullable|string',
            'cursoeyr' => 'nullable|string',
            'cursoeyri' => 'nullable|string',
            'cursoeyrf' => 'nullable|string',
            'ciudadeyr' => 'nullable|string',

        ]);

        // Buscar el empleado por su ID
        $empleado = Empleado::find($id);


        // Verificar si se encontró el empleado
        if (!$empleado) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('empleados.index')->with('error', 'Empleado no encontrado.');
        }

        // Actualizar los datos del empleado con los nuevos valores del formulario
        $empleado->update([
            'empleado' => $request->empleado,
            'nombre' => $request->nombre,
            'puesto' => $request->puesto,
            'sala' => $request->sala,
            'email' => $request->email,
            'curp' => $request->curp,
            'telefono' => $request->telefono,
            'cursopa' => $request->cursopa,
            'cursopai' => $request->cursopai,
            'cursopaf' => $request->cursopaf,
            'ciudadpa' => $request->ciudadpa,
            'cursobyr' => $request->cursobyr,
            'cursobyri' => $request->cursobyri,
            'cursobyrf' => $request->cursobyrf,
            'ciudadbyr' => $request->ciudadbyr,
            'cursomyue' => $request->cursomyue,
            'cursomyuei' => $request->cursomyuei,
            'cursomyuef' => $request->cursomyuef,
            'ciudadmyue' => $request->ciudadmyue,
            'cursoeyr' => $request->cursoeyr,
            'cursoeyri' => $request->cursoeyri,
            'cursoeyrf' => $request->cursoeyrf,
            'ciudadeyr' => $request->ciudadeyr,


        ]);

        return redirect()->route('empleados.index');
    }



    public function destroy(string $id)
    {
        // Buscar el empleado por su ID
        $empleado = Empleado::find($id);

        // Verificar si se encontró el empleado
        if (!$empleado) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('empleados.index')->with('error', 'Empleado no encontrado.');
        }

        // Eliminar el empleado de la base de datos
        $empleado->delete();

        // Redirigir a la página de empleados con un mensaje de éxito
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente.');
    }
    /** * Metodo para crear PDF de usuarios generales.*/
    public function pdf()
    {
        $empleados = Empleado::all();
        $pdf = Pdf::loadView('empleados.pdf', compact('empleados'));
        return $pdf->stream();
    }

    // Certificado de Primeros Auxilios
    public function generateCertificate($id)
    {
        // Obtén los datos del empleado según el ID
        $empleado = Empleado::findOrFail($id);

        // Configura el idioma local de Carbon a español
        Carbon::setLocale('es_ES');

        // Crea el certificado PDF usando la librería PDF (dompdf, tcpdf, etc.)
        $pdf = PDF::loadView('empleados.certificadopa', compact('empleado'));

        // Restablece el idioma local de Carbon al valor predeterminado (opcional, dependiendo de tus necesidades)
        Carbon::setLocale(config('app.locale'));

          // Personaliza los márgenes
          $pdf->setPaper('letter', 'landscape')
          ->setOption('margin-top', '2cm')
          ->setOption('margin-right', '2cm')
          ->setOption('margin-bottom', '2cm')
          ->setOption('margin-left', '2cm');

        // Descarga el PDF con un nombre específico (por ejemplo, el nombre del empleado)
        return $pdf->setPaper('A4', 'landscape')->stream('Certificado Primeros Auxilios ' . $empleado->nombre . ' ' . $empleado->apellido . '.pdf');
    }




    public function generateCertificateME($id)
    {
        // Obtén los datos del empleado según el ID
        $empleado = Empleado::findOrFail($id);

        // Configura el idioma local de Carbon a español
        Carbon::setLocale('es_ES');

        // Crea el certificado PDF usando la librería PDF (dompdf, tcpdf, etc.)
        $pdf = PDF::loadView('empleados.certificadoME', compact('empleado'));

        // Restablece el idioma local de Carbon al valor predeterminado (opcional, dependiendo de tus necesidades)
        Carbon::setLocale(config('app.locale'));

        // Personaliza los márgenes
        $margenes = ['top' => 5, 'right' => 5, 'bottom' => 5, 'left' => 5];

        // Descarga el PDF con un nombre específico (por ejemplo, el nombre del empleado)
        return $pdf->setPaper('A4', 'landscape')->stream('Certificado Manejo y Uso de Extintores ' . $empleado->nombre . ' ' . $empleado->apellido . '.pdf');
    }
    public function generateCertificatebyr($id)
    {
        // Obtén los datos del empleado según el ID
        $empleado = Empleado::findOrFail($id);

        // Configura el idioma local de Carbon a español
        Carbon::setLocale('es_ES');

        // Crea el certificado PDF usando la librería PDF (dompdf, tcpdf, etc.)
        $pdf = PDF::loadView('empleados.certificadobyr', compact('empleado'));

        // Restablece el idioma local de Carbon al valor predeterminado (opcional, dependiendo de tus necesidades)
        Carbon::setLocale(config('app.locale'));

          // Personaliza los márgenes
          $pdf->setPaper('letter', 'landscape')
          ->setOption('margin-top', '2cm')
          ->setOption('margin-right', '2cm')
          ->setOption('margin-bottom', '2cm')
          ->setOption('margin-left', '2cm');

        // Descarga el PDF con un nombre específico (por ejemplo, el nombre del empleado)
        return $pdf->setPaper('A4', 'landscape')->stream('Certificado Busqueda y Rescate ' . $empleado->nombre . ' ' . $empleado->apellido . '.pdf');
    }


    public function generateCertificateeyr($id)
    {
        // Obtén los datos del empleado según el ID
        $empleado = Empleado::findOrFail($id);

        // Configura el idioma local de Carbon a español
        Carbon::setLocale('es_ES');

        // Crea el certificado PDF usando la librería PDF (dompdf, tcpdf, etc.)
        $pdf = PDF::loadView('empleados.certificadoeyr', compact('empleado'));

        // Restablece el idioma local de Carbon al valor predeterminado (opcional, dependiendo de tus necesidades)
        Carbon::setLocale(config('app.locale'));

           // Personaliza los márgenes
           $pdf->setPaper('letter', 'landscape')
           ->setOption('margin-top', '2cm')
           ->setOption('margin-right', '2cm')
           ->setOption('margin-bottom', '2cm')
           ->setOption('margin-left', '2cm');

        // Descarga el PDF con un nombre específico (por ejemplo, el nombre del empleado)
        return $pdf->setPaper('A4', 'landscape')->stream('Certificado Evacuacion y Rescate ' . $empleado->nombre . ' ' . $empleado->apellido . '.pdf');
    }
}
