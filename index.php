<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directorio de la Industria | Asociación Nacional de Parques y Recreación</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="css/menu_hl.css">
  <link rel="stylesheet" href="css/app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
<?php include("./inc/header.php") ?>
<?php include("./inc/buscador.php") ?>
<section class="seccion-portada portada">
<div class="container">
    <div class="row parque">
      <img src="src/img/nube1.png" alt="" class="parque__nube figure-img">
      <img src="src/img/nube2.png" alt="" class="parque__nube">
      <img src="src/img/nube3.png" alt="" class="parque__nube">
    </div>
    <div class="categorias-home">
      <h3 class="col text-center titulo_cat">Nuestras Categorías:</h3>
      <!-- <div class="iconos_cat">
      </div> -->

      <nav class="navbar navbar-expand-lg navbar-light navcat">
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
  </div>
  <main class="main1">
</section>
<section class="categorias-principales container">
  <div class="row col">
    <h2 class="titulo-seccion">Categorías Principales</h2>
    <hr>

  </div>
  <div class="row categoriasEmpresa">
    <!-- <div class="col categorias-principales__item"><a href="categorias.php?id_cat=8"><img src="src/img/juegos_infantiles_foto.png" alt=""></a></div>
    <div class="col categorias-principales__item"><a href="categorias.php?id_cat=5"><img src="src/img/gimnasios_foto.png" alt=""></a></div>
    <div class="col categorias-principales__item"><a href="categorias.php?id_cat=12"><img src="src/img/parque_acuatico_foto.png" alt=""></a></div>
    <div class="col categorias-principales__item"><a href="categorias.php?id_cat=11"><img src="src/img/mobiliario_foto.png" alt=""></a></div> -->
  </div>
</section>
<section class="busquedas-destacadas">
  <div class="container">
    <div class="row col">
      <h2 class="titulo-seccion">Búsquedas Destacadas</h2>
      <hr>
    </div>
    <div class="row empresa_destacadas">
      <!-- <div class="col busquedas-destacadas__item"><img src="src/img/juegos_infantiles_foto.png" alt=""></div>
      <div class="col busquedas-destacadas__item"><img src="src/img/gimnasios_foto.png" alt=""></div>
      <div class="col busquedas-destacadas__item"><img src="src/img/parque_acuatico_foto.png" alt=""></div>
      <div class="col busquedas-destacadas__item"><img src="src/img/mobiliario_foto.png" alt=""></div> -->
    </div>
  </div>
</section>
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
</main>
<?php include("./inc/footer.php") ?>
<script src="src/js/listarCat.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<script >

  const cargar_info = async(resultado) =>{

    // resultado.value= resultado.value.charAt(0).toUpperCase() + resultado.value.slice(1);

    // resultado.value = resultado.value.toLowerCase();
      if(resultado.value.length >= 1 ){
          let data = new FormData();
          data.append('resultado', resultado.value);
          const peticion = await fetch('class/buscador.php',{
              method: 'POST',
              body: data
              })

          const resp = await peticion.json();
          // console.log(resp);

          let html = `<div class="list-group busc busc-2">`;

            if(resp.length > 0){
              for(cont of resp)
              {

                console.log(cont);
                
                html+= `<a href="empresa.php?id=${cont.id}" class="list-group-item list-group-item-action">${cont.nombre}</a>`;
                   
          
       }
            }else{
              html+=  `<a href="#" class="list-group-item list-group-item-action">No hay resultados</a>`;
            }

            html += `</div>`;


            document.getElementById('resultado_busqueda').innerHTML= html;



      }else{
        document.getElementById('resultado_busqueda').innerHTML="";
      }
  }



let casita = document.querySelector('.casita');

casita.style.setProperty('display', 'none', 'important');



</script>


<script>

  const mostrar_random = async() =>{

    const empresas_dest = document.querySelector('.empresa_destacadas');
  const data_mostrar = new FormData();
    data_mostrar.append('mostrar', 4)

    const peticion3 = await fetch('class/imgDestacada.php',{
        method: 'POST',
        body : data_mostrar
    })
       const resp3 = await peticion3.json();



       for ( imgDestacada of resp3){
           console.log(imgDestacada);

           empresas_dest.innerHTML+=`
           <div class="col-lg-3 col-md-6 busquedas-destacadas__item"><a class="col" href="empresa.php?id=${imgDestacada.id}"><img  width="224" height="220"   src="src/img/${imgDestacada.logo_url}" alt=""></a></div>

           
           `;
           
          
          
       }
      }

      const mostrarCatUImg = async() =>{
        const categorias_fotos = document.querySelector('.categoriasEmpresa');

        const peticionCategorias = await fetch('class/fotoCategorias.php',{
        method: 'POST'
    })
       const respCat = await peticionCategorias.json();
       console.log(respCat);

       for ( imgCat of respCat){
           console.log(imgCat);

           categorias_fotos.innerHTML+=`
           <div class="col col-lg-3  categorias-principales__item"><a href="categorias.php?id_cat=${imgCat.id_cat}"><img src="src/img/${imgCat.url_foto}" alt=""></a></div>

           
           `;
           
          
          
       }


      }

      mostrar_random();
      mostrarCatUImg();
    
</script>


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
</body>
</html>