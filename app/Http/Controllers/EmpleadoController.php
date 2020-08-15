<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function vista(){
        return view('Empleado/create');
    } 
    public function create(Request $request){
        return view('Empleado/create');
    }
    public function index(Request $request){
        if($request){

            $empleado=Empleado::orderBy('idEmpleado','ASC')->paginate(10);
            return view('Empleado/index',compact('empleado')); 
        }
    }
    public function store(Request $request){

        $empleado=new Empleado();

        $empleado-> idEmpleado = $request -> get('documento');
        $empleado-> Telefono = $request -> get('telefono');
        $empleado-> Nombre = $request -> get('nombre');


        $empleado -> save();

        return redirect('Empleado/index');

    }
    public function show(){
        return view ('Empleado/index');
    }
    public function update(){

    }
    public function destroy($idEmpleado){

        //
        $emp = Empleado::find($idEmpleado);
        $emp ->delete();
        return redirect()->route('Empleado/index')->with('success','Registro eliminado satisfactoriamente');

    }
    public function edit(){

    }

}
