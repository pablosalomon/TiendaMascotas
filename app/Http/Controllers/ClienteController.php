<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index')->with('clientes',Cliente::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion: procesar datos de un input
        //1. establecer las reglas de validacion:
        $reglas_validacion=[
            "nombre"=>'required|alpha|max:10|unique:customer,FirstName',
            "apellido",
            "direccion",
            "telefono",
            "estado",
            "usuario"
        ];

        //2. Crear el objeto de validacion:
        $validador= Validator::make($request->all(), $reglas_validacion);

        //3. Validar
        if($validador->fails()){
            //validacion fallida
            return redirect('clientes/create')->withErrors($validador);
        }

        //seleccionar el id maximo que haya en los clientes
        $maxcliente=Cliente::all()->max('CustomerId');

        //crear el nuevo recurso cliente
        $nuevocliente = new Cliente();
        $nuevocliente->nombreCliente = $request->input("nombre");
        $nuevocliente->apellidoCliente = $request->input("apellido");
        $nuevocliente->direccionCliente = $request->input("direccion");
        $nuevocliente->telefonoCliente = $request->input("telefono");
        $nuevocliente->estadoCliente = $request->input("estado");
        $nuevocliente->idUsuarioFK = $request->input("usuario");
        $nuevocliente->save();

        //redireccionar a la ruta deseada
        //radireccionar solo sirve en rutas GET
        //redirect puede enviar a la ruta destino lo que se denomina como datos flash
        return redirect("clientes")->with('mensaje_exito', "Cliente exitoso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view ('clientes.show')->with('cliente' ,$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //mostrar el formulario de actualizar recurso
        return view ('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //actualizar el cliente que llega atravez del comdel binding
        $cliente->nombreCliente= $request->input("nombre");
        $cliente->apellidoCliente = $request->input("apellido");
        $cliente->direccionCliente = $request->input("direccion");
        $cliente->telefonoCliente = $request->input("telefono");

        $cliente->save();
        return redirect("clientes")->with('mensaje_exito', "Cliente Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
