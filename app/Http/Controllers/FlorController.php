<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flor;

class FlorController extends Controller
{
    public function vista(){
        return view('Flor/create');
    } 
    public function create(Request $request){
        return view('Flor/create');
      
    }
    public function index(Request $request){
        if($request){

            $flor=Flor::orderBy('idFlor','ASC')->paginate(20);
            return view('Flor/index',compact('flor')); 

        }
    }
    public function store(Request $request){

        $flor=new Flor();

        $flor-> Nombre = $request -> get('nombre');
        $flor-> Precio_unitario = $request -> get('precio');

        $flor -> save();

        return redirect('Flor/create')->with('success','Registro creado satisfactoriamente');


    }
    public function show($idFlor){
        return view ('/show',["flor"=>Flor::findOrFail($idFlor)]);
    }
    
    public function edit($idFlor){
        return view ('Flor/edit',["flor"=>Flor::findOrFail($idFlor)]);
    }

    public function destroy($idFlor){

        //
       Flor::find($idFlor)->delete();
        return redirect()->route('Flor/index')->with('success','Registro eliminado satisfactoriamente');

    }
   
}
