<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrincipal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function mostrarVistaDeMuestra()
    {
        return view('secciones');
    }

   
}
