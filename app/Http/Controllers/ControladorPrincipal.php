<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

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

    public function mostrarPrincipal()
    {
        return view('secciones');
    }

    public function mostrarConsultaDeMuestra(){}
    
    

   
}
