<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Envio;

class EnvioController extends Controller

{

  
    public function vista(){
        return view('Envio/create');
    } 
    public function create(Request $request){
        return view('Envio/create');
      
    }
    public function index(Request $request){
        if($request){

            $envio=Envio::orderBy('idEnvio','ASC')->paginate(20);
            return view('Envio/index',compact('envio')); 

        }
    }
    public function store(Request $request){

        $envio=new Envio();

        $envio-> Descripcion = $request -> get('descripcion');
        $envio-> Mensaje = $request -> get('mensaje');
        $envio-> Fecha_envio = $request -> get('fecha_envio');
        $envio-> Destinatario = $request -> get('destinatario');
        $envio-> TelDestinatario = $request -> get('telDestinatario');
        $envio-> DirecDestinatario = $request -> get('direcDestinatario');
        

        $envio -> save();

        return redirect('Envio/index')->with('success','Registro creado satisfactoriamente');


    }
    public function show($idEnvio){
        return view ('Envio/show',["envio"=>Envio::findOrFail($idEnvio)]);
    }
    
    public function edit($idEnvio){
        return view ('Envio/edit',["envio"=>Envio::findOrFail($idEnvio)]);
    }

    public function destroy($idEnvio){

        //
       Envio::find($idEnvio)->delete();
        return redirect()->route('Envio/index')->with('success','Registro eliminado satisfactoriamente');

    }
    public function update(EnvioFormRequest $request, $idEnvio){
        $envio=Envio::findOrFail($idEnvio);
        $envio->Descripcion = $request->get('descripcion');
        $envio->Mensaje = $request->get('mensaje');
        $envio->Fecha_envio = $request->get('fecha_envio');
        $envio->Destinatario = $request->get('destinatario');
        $envio->TelDestinatario = $request->get('telDestinatario');
        $envio->DirecDestinatario = $request->get('direcDestinatario');
        $envio->update();

        return redirect('/');

    }
}
