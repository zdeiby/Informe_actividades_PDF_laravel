<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class IndexModel extends Model
{
    use HasFactory;
    // Define la tabla asociada al modelo (opcional si sigues las convenciones de Laravel)
   // protected $table = 'nombre_de_la_tabla';

    // Constructor para inicializar la conexión a la base de datos
    public function __construct()
    {
        parent::__construct();
    }

    // Función para buscar noticias de contacto
    public function indexDatos()
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('SELECT * from t_nombres');

        return $resultado;
    }
    public function guardarDatos($nombre,$apellido){
        $resultado = DB::insert('INSERT into t_nombres (nombre, apellido) VALUES ("'.$nombre.'", "'.$apellido.'")');
        return $resultado;
    }

    public function leerDatos(){
        $resultado = DB::select('SELECT * from t_nombres');
        return $resultado;
    }
}
