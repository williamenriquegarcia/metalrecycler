<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Departamento;

class ControladorDeRegistro extends Controller
{
    public function mostrarVistaRegistro()
    {
    	$listaDepartamento=Departamento::all();
    	return view('registro')->with('listaDepartamento',$listaDepartamento);
    }

    public function store(Request $request)
    {
    	$this->validarRegistro($request);
    	$this->ingresarRegistro($request);
    	
	}


    public function validarRegistro($request)
    {
    	$this->validate($request,
    		[
    			'nombre'=>'required',
    			'apellido'=>'required',
    			'email'=>'email',
    			'telefono'=>'numeric',
    			'clave'=>'required',
    			'departamento'=>'required'
    		]
    	);

    }

    public function ingresarRegistro($request)
    {
    	if ($request->confirme_clave==$request->clave) 
    	{
    		$usuario=new Usuario;
	    	$usuario->nombre=$request->nombre;
	    	$usuario->apellido=$request->apellido;
	    	$usuario->email=$request->email;
	    	$usuario->telefono=$request->telefono;
	    	$usuario->clave=$request->clave;
	    	$usuario->id_departamento=$request->departamento;
	    	$usuario->save();
    	}

    	$this->ingresarFoto($request,$usuario);
    }


    public function ingresarFoto($request,$usuario)
    {
    	$foto=$request->file('foto');

    	if ($foto) 
    	{
    		$ruta=$usuario->id_usuario.".".$foto->getClientOriginalExtension();
    		$foto->move('images/usuarios',$ruta);
    		$nuevaRuta=Usuario::find($usuario->id_usuario);
    		$nuevaRuta->foto=$ruta;
    		$nuevaRuta->save();
    	}
    	else
    	{
    		$ruta="avatar.png";
    		$nuevaRuta=Usuario::find($usuario->id_usuario);
    		$nuevaRuta->foto=$ruta;
    		$nuevaRuta->save();
		}
    }

   
}