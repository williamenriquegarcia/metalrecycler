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

    public function mostrarVistaDeMuestra()
    {
        return view('secciones');
    }

    public function mostrarConsultaDeMuestra()
    {
        $nombre=
        [
            "bogota d.c",
            "cundinamarca",
            "antioquia",
            "valle del cauca",
            "caldas",
            "risaralda",
            "nariño",
            "putumayo",
            "cauca",
            "quindio",
            "meta",
            "casanare",
            "boyaca",
            "santander",
            "norte de santander",
            "atlantico",
            "bolivar",
            "magdalena",
            "arauca",
            "san andres y providencia",
            "amazonas",
            "cesar",
            "guajira",
            "vaupes",
            "vichada",
            "guainia",
            "guaviare",
            "caqueta",
            "choco",
            "huila",
            "tolima",
            "cordoba",
            "sucre"


        ];
        for ($i=0; $i < count($nombre); $i++) 
        { 
            $departamento=new Departamento;
            $departamento->nombre_departamento=$nombre[$i];
            $departamento->save();
        }
        
        

    }

   
}
