<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Agrega esta línea para importar Auth
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\PrimerosAuxiliosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\SalasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BusquedaYRescateController;

/* Route::get('/', function () {
    return view('principal');
}); */

Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/conocenos', function () {
    return view('principal/conocenos');
});

/* estas son Rutas Protegidas*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/primerosauxilios/introduccion', [PrimerosAuxiliosController::class, 'introduccion']);
Route::get('/primerosauxilios/plan', [PrimerosAuxiliosController::class, 'plan']);
Route::get('primerosauxilios/revisiongeneral/evaluacion', [PrincipalController::class, 'evaluacion']);
Route::resource('primerosauxilios/registrarse', RegistroController::class)->names('registro');


Route::resource('/usuarios', UsuarioController::class)->names('usuarios');
Route::get('empleados/dashboard', [EmpleadoController::class, 'dashboard'])->name('empleados.dashboard');;
//Ruta para ver empleados con el administrador
Route::resource('/empleados', EmpleadoController::class)->names('empleados');
Route::get('empleados/{id}/certificado', [EmpleadoController::class, 'generateCertificate'])->name('empleados.certificado');
Route::get('empleados/{id}/certificadoME', [EmpleadoController::class, 'generateCertificateME'])->name('empleados.certificadoME');
Route::get('empleados/{id}/certificadobyr', [EmpleadoController::class, 'generateCertificatebyr'])->name('empleados.certificadobyr');
Route::get('empleados/{id}/certificadoeyr', [EmpleadoController::class, 'generateCertificateeyr'])->name('empleados.certificadoeyr');
Route::get('/generar-certificado-pdf', [EmpleadoController::class, 'generarCertificado'])->name('empleados.generarcertificado');
Route::get('/empleados/{id}/dc3', [EmpleadoController::class, 'generateConstanciaPDF'])->name('empleados.dc3');




//Ruta para ver puestos
Route::resource('/puestos', PuestosController::class)->names('puestos');
//Ruta para ver salas
Route::resource('/salas', SalasController::class)->names('salas');
//Ruta para general PDF
Route::get('salas/{id}/certificadosa', [SalasController::class, 'generateCertificate'])->name('salas.certificadosa');
//Ruta para general PDF de Reporte de cursos
Route::get('salas/{id}/reportecursos', [SalasController::class, 'reportepdf'])->name('salas.reportecursos');
//Ruta para generar Cosntancias PDF de Primeros Auxilios
Route::get('salas/{id}/constancias', [SalasController::class, 'certificadosPA'])->name('salas.certificadospa');
//Ruta para generar Cosntancias PDF de Busqueda y Rescate
Route::get('salas/{id}/constanciasbyr', [SalasController::class, 'certificadosBYR'])->name('salas.certificadosbyr');
//Ruta para generar Cosntancias PDF de Manejo y Uso de Extintores
Route::get('salas/{id}/constanciasmyue', [SalasController::class, 'certificadosmyue'])->name('salas.certificadosmyue');
//Ruta para generar Cosntancias PDF de Evacuacion y Rescate
Route::get('salas/{id}/constanciaseyr', [SalasController::class, 'certificadoseyr'])->name('salas.certificadoseyr');
//Ruta para generar Cosntancias PDF de Directorio de Unidad Interna
Route::get('salas/{id}/constanciasui', [SalasController::class, 'certificadosui'])->name('salas.certificadosui');





Route::prefix('primerosauxilios')->group(function () {
    Route::get('/introduccion', [PrimerosAuxiliosController::class, 'introduccion']);
    Route::get('/plan', [PrimerosAuxiliosController::class, 'plan']);
    Route::get('/revisiongeneral/evaluacion', [PrimerosAuxiliosController::class, 'evaluacion']);

    Route::post('/evaluaciones/store', [PrimerosAuxiliosController::class, 'store'])->name('evaluaciones.store');
    Route::get('/revisiongeneral/tecnicas', [PrimerosAuxiliosController::class, 'tecnicas']);
    Route::get('/revisiongeneral/estadodeconciencia', [PrimerosAuxiliosController::class, 'estado']);
    Route::get('/revisiongeneral/respiracion', [PrimerosAuxiliosController::class, 'respiracion']);
    Route::get('/revisiongeneral/circulacion', [PrimerosAuxiliosController::class, 'circulacion']);
    Route::get('/revisiongeneral/oxigenacion', [PrimerosAuxiliosController::class, 'oxigenacion']);
});

Route::prefix('busquedayrescate')->group(function () {
    Route::get('/introduccionbyr', [BusquedaYRescateController::class, 'introduccionbyr']);


});

Route::get('/salas/{id}', [SalasController::class, 'show'])->name('salas.show');
Route::post('/salas/{id}/filter', [SalasController::class, 'filterEmpleados'])->name('salas.filter');
Route::post('/salas/{id}/pdf', [SalasController::class, 'generatePdf'])->name('salas.pdf');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
// Nueva ruta GET que redirige a la ruta POST de logout
Route::get('/logout', function () {
    return redirect()->route('home')->with('method', 'POST');
})->name('get-logout');