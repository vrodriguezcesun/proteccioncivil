<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaYRescateController extends Controller
{
    public function introduccionbyr()
    {

        return view('busquedayrescate.introduccionbyr')->with('pagina', 'introduccionbyr');
    }

}
