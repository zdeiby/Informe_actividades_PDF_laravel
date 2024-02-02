<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<style>
    * {
       color: #555555 !important;
       font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
    }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid grey;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        .table-striped>tbody>tr:nth-of-type(odd)>* {
    --bs-table-color-type: var(--bs-table-striped-color);
    --bs-table-bg-type: #dff0d8;
}
       
    </style>    

<br>
    <div class="container">
       <button class="btn btn-outline-secondary btn-sm">
        <span class="bi-link"></span>
        <b style="font-size:11px">Formato informe actividades</b>
        </button> 
<br>
<br>
<table class="table table-striped  ">
            <thead>
                <tr>
                    <th scope="col">Obligación contractual</th>
                    <th scope="col">Actividad desarrollada</th>
                    <th scope="col">Evidencia</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Desarrollar páginas WEB de optimización de procesos internos según las necesidades de la Unidad Familia Medellín.</td>
                    <td>1. Se implementa la actualización de los procedimientos almacenados que calculan los logros con información de tipo de documentos. Estos son: logro 1, logro 2 y logro 3. Id requerimiento asociado: N/A Porcentaje de avance: 100 % Ruta: Gestor base de datos local.</td>
                    <td><img width="100%" src="https://unidadfamiliamedellin.com.co/metodologia2servidor/uploads/15406204_1.JPG?1706855283" alt=""></td>
                    <td><button class="btn btn-primary" type="button" style="color:white !important;" >Actualizar</button></td>                    
                    <td><button class="btn btn-danger" type="button" style="color:white !important;" >Eliminar</button></td>
                </tr>
                <tr>
                    <td>Dar soporte y realizar nuevas actualizaciones en los aplicativos web y bases de datos institucionales, algunos de ellos son: Página Institucional Requerimientos y soporte. Página Institucional Plan de búsqueda Página Institucional Pagina de la Unidad. Procesos de sincronización de datos. Página Institucional Entrega de formatos. Página Institucional Solicitudes logísticas. (Transporte, Refrigerios y fotocopias) Página Institucional términos MSOL. Página Institucional Actualización de datos contratistas. Página Institucional metodologías Unidad Familia Medellín. Página Institucional Solicitudes de atención. Y las nuevas a desarrollar según las necesidades de la Unidad.</th>
                    <td>Se realizan 2 soportes entre actualizaciones de aplicativos y soporte a las bases de datos. Esto realizados para este mes. Los id asociados son: 5363 y 5378.</td>
                    <td><img width="100%" src="https://unidadfamiliamedellin.com.co/metodologia2servidor/uploads/15406204_1.JPG?1706855283" alt=""></td>
                    <td><button class="btn btn-primary" type="button" style="color:white !important;" >Actualizar</button></td>                    
                    <td><button class="btn btn-danger" type="button" style="color:white !important;" >Eliminar</button></td>
                </tr>
                <tr>
                    <td >Creación de manuales de usuarios de las páginas web institucionales internas de la Unidad.</td>
                    <td>Se aporta en los manuales con lo que se describe de las mejoras a los aplicativos que serán socializados a todos los usuarios para este mes.</td>
                    <td><img width="100%" src="https://unidadfamiliamedellin.com.co/metodologia2servidor/uploads/15406204_1.JPG?1706855283" alt=""></td>
                    <td><button class="btn btn-primary" type="button" style="color:white !important;" >Actualizar</button></td>                    
                    <td><button class="btn btn-danger" type="button" style="color:white !important;" >Eliminar</button></td>
                </tr>
            </tbody>
        </table>


        <div>
        <span class="badge text-bg-info mb-3" style="color:white !important;background:#2fa4e7 !important">Ingrese la obligación contractual</span>
     
        <textarea class="form-control input-sm mb-4"  value=""></textarea>
    
        <span class="badge text-bg-info mb-3" style="color:white !important;background:#2fa4e7 !important">Ingrese el desarrollo de la actividad</span>
      
        <textarea class="form-control input-sm"  value=""></textarea><br>
        <span class="badge text-bg-info " style="color:white !important;background:#2fa4e7 !important">Adjunte las evidencias (una imagen)</span><br><br>
        <button class="btn btn-primary" type="button"style="color:white !important;">Adjuntar Documento</button>
        <br><br><br>
        <button class="btn btn-danger" type="button"style="color:white !important;">Actualizar</button>
        <button class="btn btn-danger" type="button"style="color:white !important;">Cerrar </button>
        <br>
        <br>

        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>