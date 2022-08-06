<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::get();
        //dd($celulares);
        return view('productos.vistaprincipal',[
            'productos' => $productos
        ]);
    }

    public function create(){
        return view('productos.agregarproducto');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            
            'codigounico'   => 'required',
            'nombre'        => 'required',
            'cantidad'      => 'required',
            'descripcion'   => 'required',
            'valor'         => 'required',
            'categoria_id'  => 'required', 
            'sucursal_id'   => 'required'       
        ]);

        //dd($request);
        
        $producto = new Producto();
        $producto->codigounico = $request->codigounico;
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->cantidad;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->categoria_id = $request->categoria_id;
        $producto->sucursal_id = $request->sucursal_id;
        $producto->save();

        $productos = Producto::get();

        return view('productos.vistaprincipal',[
            'productos' => $productos
        ]);
    }

    public function index1($id){
               
        $productos=Producto::where('id', $id)->get();

             return view('productos.listadoproducto',[
            'productos' => $productos
        ]);
    }
}
