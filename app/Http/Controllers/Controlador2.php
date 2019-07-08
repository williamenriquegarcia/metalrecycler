<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador2 extends Controller
{
    public function funcionEjemplo($parametroDeEjemplo)
    {
    	return "mensaje desde controladpr de ejemplo".$parametroDeEjemplo;
    }
}
