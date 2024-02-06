

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<!-- Resto del contenido del PDF -->

    <style>
        *{
            font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
        }
        @page{
            margin:3cm 1cm 0.4cm 1cm;
        }
        #header{
            position:fixed;
            top:-2cm;
            left:0cm;
            bottom: 0cm;
            right: 0cm;
            z-index: -1; 
        }


    </style>

    <div id="header">
    <table style="width: 100%; border:1px solid black; text-align:center;font-size:15px;" class="content mb-3">
    <tr>
        <td style="border:1px solid black;font-weight:bold;padding:20px">INFORME DE EJECUCIÓN CONTRACTUAL</td>
    </tr>
</table>
<table style="width: 100%; border:1px solid black; text-align:center ; " id="myTable">
    <tr>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:13px ">OBLIGACIONES CONTRACTUALES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:13px ">DESARROLLO DE ACTIVIDADES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:13px ">EVIDENCIAS </td>
    </tr>
</table>
<br>
    </div>

   <div class=""  >
   <table style="width: 100%; border:1px solid black; text-align:left;font-size:13px">
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;INFORME NÚMERO:</td>
        <td style="width: 63%;border:1px solid black; background:white">3</td>
    </tr>
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold;background:#E6E6E6">&nbsp;FECHA:</td>
        <td style="width: 63%;border:1px solid black; background:white">31 DE AGOSTO 2023 </td>
    </tr>
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;PERIODO (MES QUE COBRA):</td>
        <td style="width: 63%;border:1px solid black; background:white">DEL 1 AL 31 DE AGOSTO DE 2023 </td>
    </tr>  
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;DEPENDENCIA O PROYECTO:</td>
        <td style="width: 63%;border:1px solid black; background:white">UNIDAD FAMILIA MEDELLIN</td>
    </tr>  
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;APELLIDOS Y NOMBRE:</td>
        <td style="width: 63%;border:1px solid black; background:white">GRACIANO AGUDELO DEIBY ESTIVEN</td>
    </tr>  
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;CONTRATO:</td>
        <td style="width: 63%;border:1px solid black;">3660-2023</td>
    </tr>
    </tr> 
     <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;DURACIÓN CONTRATO:</td>
        <td style="width: 63%;border:1px solid black;">Del 1 de junio al 31 de agosto de 2023 </td>
    </tr>  <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">&nbsp;PORCENTAJE DE EJECUCIÓN</td>
        <td style="width: 63%;border:1px solid black;">100.00% </td>
    </tr>
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6;vertical-align: top">&nbsp;OBJETO:</td>
        <td style="width: 63%;border:1px solid black;">PRESTACIÓN DE SERVICIOS PERSONALES COMO ANÁLISIS DE SOPORTE 
            INFORMÁTICO A LAS APLICACIONES Y GESTIÓN DE LA INFORMACIÓN CIF 
            PARA LA GESTIÓN Y FORTALECIMIENTO TERRITORIAL, ACOMPAÑAMIENTO 
            PSICOSOCIAL Y FAMILIAR BUSCANDO FORTALECER EL BIENESTAR SOCIAL DE 
            LA POBLACIÓN VULNERABLE </td>
    </tr>
  
</table>
</div>
<br>

<table style="width: 100%; border:1px solid black; text-align:center">
    <tr>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:13px">OBLIGACIONES CONTRACTUALES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:13px">DESARROLLO DE ACTIVIDADES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:13px">EVIDENCIAS </td>
    </tr>
</table>

<!-- primer cuadro a foreach -->
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <table style="width: 100%; border:1px solid black; text-align:center;">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table>
<?php }} ?>
   

<!-- fin primer cuadro a foreach -->

   <!-- ultimo cuadro -->
  
    <table style=""> 
    <?php if(isset($variable[0]->foto)){ ?>
    <table style="width: 100%; border:1px solid black; text-align:center;">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;" class="pt-4 pb-2"><?php echo isset(end($variable)->objeto)? end($variable)->objeto : '';?></td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;" class="pt-4 pb-2"> <?php echo isset(end($variable)->actividad)? end($variable)->actividad : '';?></td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"><img class="mt-4 pb-2" src="../storage/app/public/temp/<?php echo isset(end($variable)->foto)? end($variable)->foto :'';?>.jpg" width="100%"/></td>
        </tr>
    </table>  <?php }?> 
    <div class="" style="padding-top:100px;padding-left:20px">
    <label for="" style="font-weight:bold;padding-bottom:10px">Firma contratista</label><br>
    <label>NOMBRES Y APELLIDOS: </label><label for="">&nbsp;&nbsp;Deiby Estiven Graciano Agudelo</label><br>
    <label for="">Documento de identidad:</label><label for="">&nbsp;&nbsp;02122312</label><br>
    <label for="" style="padding-top:80px;font-weight:bold">Firma Coordinador (a)  </label>
    </div>  
    </table>
   
</div>
 <!--fin  ultimo cuadro -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <!-- <script type="text/php">
        if (isset($pdf)) {
        $x = 515;
        $y = 815;
        $text = "Página {PAGE_NUM} de {PAGE_COUNT}";
        $font = null;
        $size = 10;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);

    }
    </script> -->
 


</body>
</html>