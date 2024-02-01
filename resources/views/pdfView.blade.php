<?php
$showSaludo = false; // Variable para determinar si mostrar el saludo
if (isset($_GET['page']) && $_GET['page'] > 1) {
    $showSaludo = true;
}
?>

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
            margin:3cm 0.5cm 0.4cm 0.5cm;
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
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:14px ">OBLIGACIONES CONTRACTUALES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:14px ">DESARROLLO DE ACTIVIDADES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:14px ">EVIDENCIAS </td>
    </tr>
</table>
<br>
    </div>

   <div class=""  >
   <table style="width: 100%; border:1px solid black; text-align:left;font-size:13px">
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">INFORME NÚMERO:</td>
        <td style="width: 63%;border:1px solid black; background:white">3</td>
    </tr>
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold;background:#E6E6E6">FECHA:</td>
        <td style="width: 63%;border:1px solid black; background:white">31 DE AGOSTO 2023 </td>
    </tr>
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">PERIODO (MES QUE COBRA):</td>
        <td style="width: 63%;border:1px solid black; background:white">DEL 1 AL 31 DE AGOSTO DE 2023 </td>
    </tr>  
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">DEPENDENCIA O PROYECTO:</td>
        <td style="width: 63%;border:1px solid black; background:white">UNIDAD FAMILIA MEDELLIN</td>
    </tr>  
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">APELLIDOS Y NOMBRE:</td>
        <td style="width: 63%;border:1px solid black; background:white">GRACIANO AGUDELO DEIBY ESTIVEN</td>
    </tr>  
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6"> CONTRATO:</td>
        <td style="width: 63%;border:1px solid black;">3660-2023</td>
    </tr>
    </tr> 
     <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">DURACIÓN CONTRATO:</td>
        <td style="width: 63%;border:1px solid black;">Del 1 de junio al 31 de agosto de 2023 </td>
    </tr>  <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">PORCENTAJE DE EJECUCIÓN</td>
        <td style="width: 63%;border:1px solid black;">100.00% </td>
    </tr>
    <tr>
        <td style="width: 33%;border:1px solid black;font-weight:bold; background:#E6E6E6">OBJETO:</td>
        <td style="width: 63%;border:1px solid black;">PRESTACIÓN DE SERVICIOS PERSONALES COMO ANÁLISIS DE SOPORTE 
            INFORMÁTICO A LAS APLICACIONES Y GESTIÓN DE LA INFORMACIÓN-CIF 
            PARA LA GESTIÓN Y FORTALECIMIENTO TERRITORIAL, ACOMPAÑAMIENTO 
            PSICOSOCIAL Y FAMILIAR BUSCANDO FORTALECER EL BIENESTAR SOCIAL DE 
            LA POBLACIÓN VULNERABLE </td>
    </tr>
  
</table>
</div>
<br>

<table style="width: 100%; border:1px solid black; text-align:center">
    <tr>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:14px">OBLIGACIONES CONTRACTUALES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:14px">DESARROLLO DE ACTIVIDADES </td>
        <td style="width: 33.33%;border:1px solid black;background:#E6E6E6;font-weight:bold; font-size:14px">EVIDENCIAS </td>
    </tr>
</table>

<!-- primer cuadro a foreach -->
   <table style="width: 100%; border:1px solid black; text-align:center;">
    <tr>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">En física, una onda es una propagación de una perturbación de alguna propiedad de un medio, por ejemplo, densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="assets/img1.jpg" width="100%"/></td>
    </tr>
</table>
<table style="width: 100%; border:1px solid black; text-align:center;">
    <tr>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">En física, una onda es una propagación de una perturbación de alguna propiedad de un medio, por ejemplo, densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="assets/img1.jpg" width="100%"/></td>
    </tr>
</table>
<table style="width: 100%; border:1px solid black; text-align:center;">
    <tr>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">En física, una onda es una propagación de una perturbación de alguna propiedad de un medio, por ejemplo, densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="assets/img1.jpg" width="100%"/></td>
    </tr>
</table>
<table style="width: 100%; border:1px solid black; text-align:center;">
    <tr>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">En física, una onda es una propagación de una perturbación de alguna propiedad de un medio, por ejemplo, densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="assets/img1.jpg" width="100%"/></td>
    </tr>
</table>
<table style="width: 100%; border:1px solid black; text-align:center;">
    <tr>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">En física, una onda es una propagación de una perturbación de alguna propiedad de un medio, por ejemplo, densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="assets/img1.jpg" width="100%"/></td>
    </tr>
</table>
<table style="width: 100%; border:1px solid black; text-align:center;">
    <tr>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">En física, una onda es una propagación de una perturbación de alguna propiedad de un medio, por ejemplo, densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
        <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="assets/img1.jpg" width="100%"/></td>
    </tr>
</table>
<!-- fin primer cuadro a foreach -->

   <!-- ultimo cuadro -->
    <table style="">
    <table style="width: 100%; border:1px solid black; text-align:center;">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;" class="pt-4 pb-2">asdasdasdasd Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse natus quia mollitia officiis maiores pariatur sequi in, ipsa minima maxime ad. Qui sequi, incidunt magni ea neque quo dignissimos laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quod at quo sunt ut quaerat sint quas quae sit impedit nesciunt, quasi placeat ex omnis accusamus. Iste excepturi accusantium esse!</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;" class="pt-4 pb-2"> Densidad, presión, campo eléctrico o campo magnético, que se propaga a través del espacio transportando energía. El medio perturbado puede ser de naturaleza diversa como aire, agua, un trozo de metal o el vacío.</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"><img class="mt-4 pb-2" src="assets/img1.jpg" width="100%"/></td>
        </tr>
    </table>  
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
   <script type="text/php">
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
    </script>
 


</body>
</html>