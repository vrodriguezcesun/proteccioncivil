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
Route::resource('primerosauxilios/registrarse', RegistroController::class)->names('primerosauxilios');

Route::resource('/usuarios', UsuarioController::class)->names('usuarios');

//Ruta para ver empleados con el administrador
Route::resource('/empleados', EmpleadoController::class)->names('empleados');
Route::get('empleados/{id}/certificado', [EmpleadoController::class, 'generateCertificate'])->name('empleados.certificado');
Route::get('empleados/{id}/certificadoME', [EmpleadoController::class, 'generateCertificateME'])->name('empleados.certificadoME');
Route::get('empleados/{id}/certificadobyr', [EmpleadoController::class, 'generateCertificatebyr'])->name('empleados.certificadobyr');
Route::get('empleados/{id}/certificadoeyr', [EmpleadoController::class, 'generateCertificateeyr'])->name('empleados.certificadoeyr');


//Ruta para ver puestos
Route::resource('/puestos', PuestosController::class)->names('puestos');
//Ruta para ver salas
Route::resource('/salas', SalasController::class)->names('salas');



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
