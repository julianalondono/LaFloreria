<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;
use DB;

class ClienteController extends Controller

{

   
    public function vista(){
        return view('Cliente/create');
    } 
    public function create(Request $request){
        return view('Cliente/create');
      
    }
    public function index(Request $request){
        if($request){

            $cliente=Cliente::orderBy('idCliente','ASC')->paginate(20);
            return view('Cliente/index',compact('cliente')); 

        }
    }
    public function store(Request $request){

        $cliente=new Cliente();

        $cliente-> idCliente = $request -> get('documento');
        $cliente-> Direccion = $request -> get('direccion');
        $cliente-> Nombre = $request -> get('nombre');
        $cliente-> Telefono = $request -> get('telefono');

        $cliente -> save();

        return redirect('Cliente/create')->with('success','Registro creado satisfactoriamente');


    }
    public function show($idCliente){
        return view ('Cliente/show',["cliente"=>Cliente::findOrFail($idCliente)]);
    }
    
    public function edit($idCliente){
        return view ('Cliente/edit',["cliente"=>Cliente::findOrFail($idCliente)]);
    }

    public function destroy($idCliente){

        //
       Cliente::find($idCliente)->delete();
        return redirect()->route('Cliente/index')->with('success','Registro eliminado satisfactoriamente');

    }
    public function update(ClienteFormRequest $request, $idCliente){
        $cliente=Cliente::findOrFail($idCliente);
        $cliente->Direccion = $request->get('direccion');
        $cliente->Nombre = $request->get('nombre');
        $cliente->Telefono = $request->get('telefono');
        $cliente->update();

        return redirect('/');

    }
}
