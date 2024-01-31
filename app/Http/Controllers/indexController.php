<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;
use Barryvdh\DomPDF\Facade\Pdf  as PDF;


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

    public function guardarpdf(){
        $data = [
            'titulo' => 'Informe de Categoría',
            'contenido' => 'Este es un ejemplo de contenido para el informe de categoría.',
            'fecha' => date('Y-m-d'),
            'imagen_url' => 'https://www.fisicalinda.com/wp-content/uploads/2018/10/image009.jpg'
        ];
    
        // Cargar la vista y generar el PDF
        $pdf = PDF::loadView('pdfView', $data);
        $pdf->getDomPDF()->set_option("enable_php", true);

        // Mostrar o descargar el PDF
        return $pdf->stream();
  
    
    }
}
