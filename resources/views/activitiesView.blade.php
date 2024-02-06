<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
       <button class="btn btn-outline-secondary btn-sm"  id="btn-formato-pdf">
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
            <tbody id="cargartodo">
              
            </tbody>
        </table>


        <div>
        <span class="badge text-bg-info mb-3" style="color:white !important;background:#2fa4e7 !important">Ingrese la obligación contractual</span>
     
        <textarea class="form-control input-sm mb-4"  id="input1"></textarea>
        <input style="display:none" type="text"  disabled id="idactualizar">
        <input style="display:none" type="text" disabled id="idimg">
        <span class="badge text-bg-info mb-3" style="color:white !important;background:#2fa4e7 !important">Ingrese el desarrollo de la actividad</span>
      
        <textarea class="form-control input-sm"  id="input2"></textarea><br>
        <span class="badge text-bg-info " style="color:white !important;background:#2fa4e7 !important" id="ingresar">Adjunte las evidencias (una imagen)</span><br><br>
        <button id="adjuntarbtn" class="btn btn-primary" type="button"style="color:white !important;"  data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Adjuntar Documento</button>
        <br><br><br>
        <button id="btn-actualizar" class="btn btn-danger"  type="button"style="color:white !important;" disabled>Actualizar</button>
        <button class="btn btn-danger"  type="button"style="color:white !important;">Cerrar </button>
        <br>
        <br>

        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
       <!-- <form action="index.php/guardarimagen" method="POST"  enctype="multipart/form-data"> -->
    
      <div class="modal-body">    <h3 class="text-center text-success">Cargar Imagen</h3>

      <div class="container mt-5">

        <div class="mb-3">
          
            <label for="imagenInput" class="form-label">Seleccionar Archivo:<br>Solo es permitido El formato JPG ó PNG y un peso máximo de 2 MB</label>
            <input type="file" class="form-control" id="imagenInput" accept="image/*" name="file">

        </div>
        
        <!-- <button type="submit" class="btn btn-primary"  style="color:white !important">Cargar</button> -->
        <div id="botoncargar" style="display:none">
            <button style="color:white !important" class="btn btn-primary" type="button" disabled>
            <span  style="color:white !important" class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span  role="status" style="color:white !important">Loading...</span>
            </button>
        </div>
        <div id="barracargar" style="display:none">
            <span class="placeholder col-12 bg-success"></span>
            <label for="">Archivo subido correctamente</label>
        </div>
        <div id="barracargarerror" style="display:none">
            <span class="placeholder col-12 bg-danger"></span>
            <label for="">Error al cargar imagen, revisa extesión o imagen dañada</label>
        </div>
   
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="color:white !important" onclick="cargarImagen()" >Cargar</button>        
        <button type="button" id="cerrarmodal" class="btn btn-secondary" style="color:white !important" data-bs-dismiss="modal">Cerrar</button>

      </div>
  <!-- </form> -->

</div>
  </div>
</div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $('#btn-formato-pdf').click(function(){
        urlAnterior = window.location.href;
        var url = urlAnterior.substr(urlAnterior.lastIndexOf('/') + 1);
        window.open(`http://localhost/example/public/index.php/guardarpdf/${url}`, '_blank','toolbar=no, location=no');
    });

    $(document).ready(function() {
        console.log("El DOM ha sido cargado");
        leerActividades();
    });

 function eliminar(id){
    console.log('Eliminado correctamente'+' '+ id);
    $('#tr'+id).hide();
    $('#idactualizar').text('0');
    $('#input1').text('');
    $('#input2').text('');


 }

 function editar(id){
    $('#adjuntarbtn').prop("disabled", false);
    console.log('Editado correctamente'+' '+ id);
    $.ajax({
        url:"index.php/editar",
        type:'GET',
        data: {id:id},
        dataType:"JSON",
        success: function (data){
            console.log(data[0].id)
           // $('#cargartodo').html(data);
           $('#input1').val(data[0].objeto);
           $('#input2').val(data[0].actividad);
           $('#idactualizar').text(data[0].id);
           $('#idimg').text(data[0].foto);

        },error:function(error){
        }
    });

 }

    function leerActividades(){
        urlAnterior = window.location.href;
        var url = urlAnterior.substr(urlAnterior.lastIndexOf('/') + 1);

        $.ajax({
        url:"index.php/leerActividades",
        type:'GET',
        data:{url:url},
        dataType:"JSON",
        success: function (data){
            $('#cargartodo').html(data.html_consulta);
        },error:function(error){
        }
    });
    }


    function cargarImagen() {
        var inputFile = $('#imagenInput')[0].files[0];
        var formData = new FormData();
        formData.append('imagen', inputFile);
        if (inputFile) {
            // Crea una URL de objeto para la imagen cargada          
        
        $('#botoncargar').css('display','');


        $.ajax({
        url: 'index.php/verificaimagen',
        type: 'POST',
        data: formData,
        contentType: false, // Importante: desactiva el tipo de contenido predeterminado
        processData: false, // Importante: desactiva la transformación automática de datos
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            $('#barracargar').css('display','');
            $('#botoncargar').css('display','none');
             //  $("#imagenInput").val('');
            $('#btn-actualizar').prop("disabled", false);
            console.log(response);
        },
        error: function(error) {
            // Manejar errores 
            $('#barracargarerror').css('display','');
            $('#botoncargar').css('display','none');
            $('#imagenInput').val('');
            setTimeout(() => {
                $('#barracargarerror').css('display','none');
            }, 2000);
            console.log(error);
        }
    });


        var imageUrl = URL.createObjectURL(inputFile);

        // Muestra la URL en la consola
        console.log('URL de la imagen cargada: ' + imageUrl);

        // Realiza otras acciones que desees con el archivo seleccionado
        console.log('Nombre del archivo: ' + inputFile.name);
        console.log('Tipo de archivo: ' + inputFile.type);
        console.log('Tamaño del archivo: ' + inputFile.size + ' bytes');
       // $('#imagenVisualizada').attr('src', imageUrl);

        } else {
            console.log('No se seleccionó ningún archivo.');
        }
    }
  
    $("#cerrarmodal").click(function(){

        $('#barracargar').hide();
    })

    $('#input1, #input2').change(function(){
        var input1Value = $('#input1').val();
        var input2Value = $('#input2').val();
        if (input1Value && input2Value) {
        $('#adjuntarbtn').prop("disabled", false);
         }else{
            $('#adjuntarbtn').prop("disabled", true);
         }
    });


    $('#btn-actualizar').click(function() {
        if($('#idactualizar').text() == ''){
            var input1Value = $('#input1').val();
            var input2Value = $('#input2').val();
            var inputFile = $('#imagenInput')[0].files[0];
            urlAnterior = window.location.href;
        // Obtener la última parte de la URL
            var ultimoSegmento = urlAnterior.substr(urlAnterior.lastIndexOf('/') + 1);
            // Crear un objeto FormData para enviar datos y archivos
            var formData = new FormData();
            formData.append('input1', input1Value);
            formData.append('input2', input2Value);
            formData.append('imagen', inputFile);
            formData.append('url',ultimoSegmento);
            $.ajax({
                url: 'index.php/guardarimagen',
                type: 'POST',
                data: formData,
                contentType: false, // Importante: desactiva el tipo de contenido predeterminado
                processData: false, // Importante: desactiva la transformación automática de datos
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#input1').val('');
                    $('#input2').val('');
                    $('#imagenInput').val('');
                    $('#adjuntarbtn').prop("disabled", true);
                   $('#btn-actualizar').prop("disabled", true);
                   $('#idactualizar').text('') 
                    leerActividades();
                },
                error: function(error) {
                    // Manejar errores
                    console.log(error);
                }
            }); 
        }else{
            var input1Value = $('#input1').val();
            var input2Value = $('#input2').val();
            var inputFile = $('#imagenInput')[0].files[0];
            var id=$('#idactualizar').text();
            var imgid=$('#idimg').text();
            urlAnterior = window.location.href;
        // Obtener la última parte de la URL
            var ultimoSegmento = urlAnterior.substr(urlAnterior.lastIndexOf('/') + 1);
            // Crear un objeto FormData para enviar datos y archivos
            var formData = new FormData();
            formData.append('input1', input1Value);
            formData.append('input2', input2Value);
            formData.append('imagen', inputFile);
            formData.append('url',ultimoSegmento);
            formData.append('id',id);
            formData.append('imgid',imgid);
            $.ajax({
                url: 'index.php/guardarimagenactualizar',
                type: 'POST',
                data: formData,
                contentType: false, // Importante: desactiva el tipo de contenido predeterminado
                processData: false, // Importante: desactiva la transformación automática de datos
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#input1').val('');
                    $('#input2').val('');
                   $('#imagenInput').val('');
                   $('#adjuntarbtn').prop("disabled", true);
                   $('#btn-actualizar').prop("disabled", true);
                   $('#idactualizar').text('') 
                    leerActividades();
                   // window.location.reload();
                },
                error: function(error) {
                    // Manejar errores
                    console.log(error);
                }
            }); 
    }

   





});

  </script>
</body>
</html>