<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Cliente;

use DB;

class PedidoController extends Controller
{

   
    public function vista(){
        return view('Pedido/create');
    } 
    public function create(Request $request){
        return view('Pedido/create');
      
    }
    public function index(Request $request){
        if($request){

            $pedido=Pedido::orderBy('idPedido','ASC')->paginate(20);
            return view('Pedido/index',compact('pedido')); 

        }
    }

    public function store(Request $request){


        $pedido=new Pedido();

        $idCliPedido = Cliente::findOrFail($request -> get('cliente'));  
        
        if($idCliPedido){

        $pedido-> idCliente = $request -> get('cliente');    
        $pedido-> Fecha = $request -> get('fecha');
        $pedido -> save();

        return redirect('Pedido/create')->with('success','Registro creado satisfactoriamente');
        }else{
            return redirect('Pedido/create')->with('success','No se encuentra el cliente');
        }

    }
    
    public function edit($idPedido){
        return view ('Pedido/edit',["cliente"=>Pedido::findOrFail($idPedido)]);
    }

    public function destroy($idPedido){

        //
       Pedido::find($idPedido)->delete();
        return redirect()->route('Pedido/index')->with('success','Registro eliminado satisfactoriamente');

    }

}
