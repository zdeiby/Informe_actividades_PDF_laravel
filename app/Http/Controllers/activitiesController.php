<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Importa la clase Storage
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\URL;
use App\Models\ActivitiesModel;

class activitiesController extends Controller
{
    public function activities(Request $request, $parametro){
      $resultado=[[
          "obligacion"=>'Desarrollar páginas WEB de optimización de procesos internos según las necesidades de la Unidad Familia Medellín.',
          "actividad"=>'1. Se implementa la actualización de los procedimientos almacenados que calculan los logros con información de tipo de documentos. Estos son: logro 1, logro 2 y logro 3. Id requerimiento asociado: N/A Porcentaje de avance: 100 % Ruta: Gestor base de datos local.',
          "evidencia"=>'assets/img1.jpg'
      ],
      [
        "obligacion"=>'Dar soporte y realizar nuevas actualizaciones en los aplicativos web y bases de datos institucionales, algunos de ellos son: Página Institucional Requerimientos y soporte. Página Institucional Plan de búsqueda Página Institucional Pagina de la Unidad. Procesos de sincronización de datos. Página Institucional Entrega de formatos. Página Institucional Solicitudes logísticas. (Transporte, Refrigerios y fotocopias) Página Institucional términos MSOL. Página Institucional Actualización de datos contratistas. Página Institucional metodologías Unidad Familia Medellín. Página Institucional Solicitudes de atención. Y las nuevas a desarrollar según las necesidades de la Unidad.',
        "actividad"=>'Se realizan 2 soportes entre actualizaciones de aplicativos y soporte a las bases de datos. Esto realizados para este mes. Los id asociados son: 5363 y 5378.',
        "evidencia"=>'assets/img1.jpg'
      ],
      [
        "obligacion"=>'Creación de manuales de usuarios de las páginas web institucionales internas de la Unidad.',
        "actividad"=>'Se aporta en los manuales con lo que se describe de las mejoras a los aplicativos que serán socializados a todos los usuarios para este mes.',
        "evidencia"=>'assets/img1.jpg'
    ]
    ];
        return view('activitiesView',["variable"=>$resultado]);
    }

    public function leerActividades(Request $request){
      $url=$request->input('url');
      $modelo = new ActivitiesModel();
      $datosBD = $modelo->leerActivities($url);

    $html_consulta='';
    foreach ($datosBD as $value) {
      $html_consulta .='<tr id="tr'.$value->id.'">
      <td scope="row">'.$value->objeto.'</td>
      <td>'.$value->actividad.'</td>
      <td><img width="100%" src="../storage/app/public/temp/'.$value->foto.'.jpg" alt=""></td>
      <td><a ><button onclick="editar('.$value->id.')" class="btn btn-primary" type="button" style="color:white !important;" >Actualizar</button></td></a>                    
      <td><button class="btn btn-danger" type="button" style="color:white !important;"  onclick="eliminar('.$value->id.')">Eliminar</button></td>
    </tr>';
    }
    return response()->json(["html_consulta"=>$html_consulta,"datos"=>$datosBD]);

    }



    public function editar(Request $request){
      $id=$request->input('id');
      $modelo = new ActivitiesModel();
      $datosBD = $modelo->leerparaeditar($id);

    return response()->json($datosBD);

    }

    public function verificaimagen(Request $request){
      
    return $request->validate([
        'imagen' => 'required|image|max:2048',
    ]);
    }

    public function guardarimagen(Request $request){
      $modelo = new ActivitiesModel();
      $segmentos = $request->segments();
      $ultimoSegmento = end($segmentos);
      $input1 = $request->input('input1');
      $input2 = $request->input('input2');
      $url =$request->input('url');

        $request->validate([
            'imagen' => 'required|image|max:2048',
        ]);

        $imagen = $request->file('imagen');
        $identificadorUnico = uniqid();
        // Genera un nombre único para la imagen
        $nombreImagen = $identificadorUnico . '.jpg';

        // Mueve manualmente la imagen al directorio deseado
        $imagen->move(storage_path('app/public/temp'), $nombreImagen);

        $datosBD = $modelo->guardarActivities($url,$input1,$input2,$identificadorUnico);


        // Retornar la URL de la imagen
        return 'Imagen cargada exitosamente. Ruta: ' . Storage::url('public/temp/' . $nombreImagen) . $input1 .'  ' .$input2.   $url;

    }

    public function guardarimagenactualizar(Request $request){
      $modelo = new ActivitiesModel();
      $segmentos = $request->segments();
      $ultimoSegmento = end($segmentos);
      $input1 = $request->input('input1');
      $input2 = $request->input('input2');
      $url =$request->input('url');
      $id=$request->input('id');
      $identificadorImagen=$request->input('imgid');
      $rutaImagen = storage_path('app/public/temp/' . $identificadorImagen . '.jpg');
        if (file_exists($rutaImagen)) {
          // Eliminar la imagen
          unlink($rutaImagen);

          // Aquí puedes realizar cualquier otra lógica necesaria, como eliminar la referencia de la imagen en tu base de datos
          // Puedes agregar la lógica para eliminar la referencia de la imagen en tu base de datos aquí, utilizando el identificador único
          } else {
              // La imagen no existe
              return 'La imagen no existe.';
          }
        $request->validate([
            'imagen' => 'required|image|max:2048',
        ]);

        $imagen = $request->file('imagen');
        $identificadorUnico = uniqid();
        // Genera un nombre único para la imagen
        $nombreImagen = $identificadorUnico . '.jpg';

        // Mueve manualmente la imagen al directorio deseado
        $imagen->move(storage_path('app/public/temp'), $nombreImagen);

        $datosBD = $modelo->editarActivities($id,$input1,$input2,$identificadorUnico);


        // Retornar la URL de la imagen
        return 'Imagen cargada exitosamente. Ruta: ' . Storage::url('public/temp/' . $nombreImagen) . $input1 .'  ' .$input2.   $url;

    }
}
