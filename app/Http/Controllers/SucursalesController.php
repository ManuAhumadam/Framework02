<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();
        // dd($sucursales);
        return view('sucursalesCategorias.listadosucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function create(){
    return view('sucursalesCategorias.agregarsucursal');
    }

    public function store(Request $request){

        $this->validate($request,[
            'nombre' => 'required',
            'direccion' => 'required',
            'imagen' => 'required'
        ]);

        $sucursal = new Sucursal();
        $sucursal-> nombre = $request->nombre;
        $sucursal-> direccion = $request->direccion;
        $sucursal-> imagen = $request->imagen;
        $sucursal-> save();
        
        $sucursales = Sucursal::get();
        // dd($sucursales);
        return view('sucursalesCategorias.listadosucursal',[
            'sucursales' => $sucursales
        ]);
    }
}
