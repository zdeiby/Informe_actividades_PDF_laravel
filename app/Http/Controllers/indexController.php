<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;

class indexController extends Controller
{
    public function index(){
        $modelo = new IndexModel();
        $resultado = $modelo->indexDatos();
        //$variable="Hola";
        return view('indexView',["variable"=>$resultado]);
    }
    public function guardar(Request $request){
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellido');
        $modelo = new IndexModel();
        $resultado = $modelo->guardarDatos($nombre,$apellido);
        return response()->json(['Nombre'=>$nombre,'Apellido'=>$apellido]);
    }

    public function leer(Request $request){
        $modelo=new IndexModel();
        $resultado = $modelo->leerDatos();
        return response()->json($resultado);
    }
}
