<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;
use Barryvdh\DomPDF\Facade\Pdf  as PDF;
use App\Models\ActivitiesModel;
use Illuminate\Support\Facades\URL;


class indexController extends Controller
{

    // public function leerActividadespdf(Request $request,$parametro){
    //     $data = [
    //         'titulo' => '',
    //         'contenido' => 'Este es un ejemplo de contenido para el informe de categoría.',
    //         'fecha' => date('Y-m-d'),
    //         'imagen_url' => 'https://www.fisicalinda.com/wp-content/uploads/2018/10/image009.jpg'
    //     ];
    //     return view('pdfView',["variable"=>$data]);
    // }
    public function guardarpdf(Request $request, $parametro){
        $url = URL::current();
        $ultima_parte = substr($url, strrpos($url, '/') + 1);
        $modelo = new ActivitiesModel();
        $datosBD = $modelo->leerActivities($ultima_parte);
        // Cargar la vista y generar el PDF
        $pdf = PDF::loadView('pdfView', ["variable"=>$datosBD]);
        $pdf->getDomPDF()->set_option("enable_php", true);

        // Mostrar o descargar el PDF
        return $pdf->stream();
    }

   
}
