<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    public function vista(){
        return view('Proveedor/create');
    } 
    public function create(Request $request){
        return view('Proveedor/create');
      
    }
    public function index(Request $request){
        if($request){

            $proveedor=Proveedor::orderBy('idProveedor','ASC')->paginate(20);
            return view('Proveedor/index',compact('proveedor')); 

        }
    }
    public function store(Request $request){

        $proveedor=new Proveedor();

        $proveedor-> idProveedor = $request -> get('documento');
        $proveedor-> Nombre = $request -> get('nombre');
        $proveedor-> Descripcion_producto = $request -> get('descripcion'); 
        $proveedor-> Direccion = $request -> get('direccion');
        $proveedor-> Telefono = $request -> get('telefono');

        $proveedor -> save();

        return redirect('Proveedor/create')->with('success','Registro creado satisfactoriamente');


    }
    public function show($idProveedor){
        return view ('Proveedor/show',["proveedor"=>Proveedor::findOrFail($idProveedor)]);
    }
    
    public function edit($idProveedor){
        return view ('Proveedor/edit',["proveedor"=>Proveedor::findOrFail($idProveedor)]);
    }

    public function destroy($idProveedor){

        //
       Proveedor::find($idProveedor)->delete();
        return redirect()->route('Proveedor/index')->with('success','Registro eliminado satisfactoriamente');

    }
    public function update(ProveedorFormRequest $request, $idProveedor){
       //

    }
}
