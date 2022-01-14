<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu_hl.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/simplePagination.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="src/js/jquery.simplePagination.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<?php include("./inc/header.php") ?>
<?php include("./inc/buscador.php") ?>
<div class="categorias-home cat-home">
      <h3 class="col text-center titulo_cat">Nuestras Categorías:</h3>
      <hr>
      <!-- <div class="iconos_cat">
      </div> -->

      <nav class="navbar navbar-expand-lg navbar-light navcatcat">
    <button class="navbar-toggler movernav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon normal"></span>
    </button>
    <div class="collapse navbar-collapse todo" id="navbarNavAltMarkup">
      <div class="iconos_cat">
      </div>
      </div>
    </div>
  
</nav>
  </div>

    <div class="fluid-container main">

    <div class="container">
       
        <div class="row">
            <div class="col-3 aside">
                <h3 class="text-center">Categorías:</h3>
                <div class="lista_cat">
                 
                 
                </div>
                <div>
                    <a class="boton-regresar" href="./index.php">Regresar</a>
                </div>
            </div>
            <div class="col-9 contenido">
                <h3 class="nombre_cat">
                </h3>

                <div class="contenedor-empresas">
                  

                </div>

                <p class="texto-cat"></p>

                <div id="pagination-container"></div>
                <div class="ocultar_desktop">
                <section class="promociones container">

                
<div class="row col">
    <h2 class="titulo-seccion">Promociones</h2>
    <hr>

  </div>
  <div class="row anunciosEmpresa">
    <!-- <div class="col-md-6 col-lg-6 promociones__item">
      <img src="src/img/anuncio1.png" alt="">
    </div>
    <div class="col-md-6 col-lg-6 promociones__item">
      <img src="src/img/anuncio2.png" alt="">
    </div> -->
  </div>
</section>
<section class="informacion">
<div class="informacion__contenido container">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-7">
      <p>¿Tu empresa ofrece servicios o productos relacion<br><span>Forma parte del directorio de la industria</span><br></p>
      <hr>
      <a href="registro.php" class="btn btn__aqua">Registrate Aquí</a>
    </div>
  </div>
</div>
</section>
</div>
            </div>
                   
        </div>
    </div>
</div>
<?php include("./inc/footer.php") ?>
<script src="src/js/listarCat.js"></script>
<script>
  $(document).ready(function(){
    $(".ocultarcat").hide();

  })
</script>
<!-- <script>
   if (screen.width < 980)  {
     alert('ipad');
   }

</script> -->
<script>

  const mostrarAnuncios = async() =>{

    const anuncios = document.querySelector('.anunciosEmpresa');
  const data_mostrar = new FormData();
    // data_mostrar.append('mostrar', 4)

    const peticionAnuncio = await fetch('class/promoEmpresas.php',{
        method: 'POST'
    })
       const respAnuncio = await peticionAnuncio.json();


       console.log(respAnuncio);

       for ( anuncioEmpresa of respAnuncio){
          //  console.log(anuncioEmpresa);

          anuncios.innerHTML+=`
            <div class="col-md-6 col-lg-6 promociones__item"><a class="col" href="empresa.php?id=${anuncioEmpresa.id_empresa}"><img src="src/img/${anuncioEmpresa.url_anuncio}" alt=""></a></div>
           
           `;
           
          
          
       }
      }

   

      mostrarAnuncios();
</script>

<script src="busqueda.js"></script>


</body>
</html>