<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-4" id="login">
        <div class="row" style="">
            <div class="col" style="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSas6HwPoNyM5SzPaw2CzNvQ4rZTT7dltk_Sg&usqp=CAU" width="100%" alt=""></div>
            <div class="col text-center" style="">
                <h2 class="text-center pt-4">Registrese</h2><br>
                <label for="">Nombre</label><br>
                <input  id="nombre" class="form-control" type="text" name="Nombre" id=""><br><br>
                <label for="">Apellido</label><br>
                <input id="apellido" class="form-control" type="text" name="Apellido" id=""><br><br>
                <input id="boton" class="btn btn-success" type="button" value="Guardar">
                <input id="leernombres" class="btn btn-primary" type="button" value="Leer">

        </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav" style="display:none">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<style>
    img{
        height: 400px;
    }
</style>
<button class="btn btn-warning" id="volver" type="button">Volver</button>

<div class="container" id="carousel"  style="display:none">


<div id="carouselExampleIndicators" class="carousel slide" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://concepto.de/wp-content/uploads/2020/12/imagen-e1607991758274-800x400.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://concepto.de/wp-content/uploads/2020/12/imagen-e1607991758274-800x400.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://concepto.de/wp-content/uploads/2020/12/imagen-e1607991758274-800x400.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br>
<h2 class="text-center">¿Quieres aprender a crear tu sitio web en Laravel con PHP?</h2>

</div>


<div class="container pt-4">
    <div id="vernombres"></div>
    <div id="verapellidos"></div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    <script>
        $('#boton').click(function () {
            $.ajax({
                url: "index.php/guardar",
                type: "GET",
                data:{nombre:$('#nombre').val(), apellido:$("#apellido").val()},
                dataType: "json",
                success: function (response) {
                    $('#login').hide();
                    $('#nav').show();
                    $('#carousel').show();
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });

        $('#leernombres').click(function(){
            $.ajax({
                url:'index.php/leer',
                type:'get',
                data:'',
                dataType:'JSON',
                success:function(data){
                    data.forEach(datas => {
                        if(datas.nombre ==''){

                        }else{
                         $('#vernombres').append('<li>'+datas.nombre +' '+ datas.apellido+'</li>');
                        }
                        $('#login').hide();


                    });
                   // $('#verapellidos').html(data.apellido)
                }
            })
        })
       
$('#volver').click(function(){
    location.reload();
})

    </script>
</body>
</html>

