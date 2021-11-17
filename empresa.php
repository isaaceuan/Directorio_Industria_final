<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu_hl.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/simple-lightbox.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://www.jsdelivr.com/package/npm/lightgallery"></script>
    <title>Document</title>
</head>

<body>
<?php include("./inc/header.php") ?>
<?php include("./inc/buscador.php") ?>
    <div class="fluid-container contenedorInfoEmpresa">

        <div class="container contenedorDatos">
            <div class="col-xl-6 col-md-10 col-sm-12 logoEmpresa">
                    <img src="" alt="">
            </div>

            <div class="col-xl-5 col-md-10 col-sm-12 cuadroEmpresa">
                <!-- <div class="contenedorBoton"></div> -->
        </div>
        </div>
    </div>

    <div class="row cont_desc">
        <div class="fluid-container descripcion">
            <div class="col-xl-5 col-md-8 col-lg-5 col-md-12">
                <h2>Descripción</h2>
                <p class="texto-descripcion"></p>
                <div class="video-responsive">
   
                </div>

                <div class="catalogoP mt-4">
                  
                </div>

                <div class="col-12 mt-5">
                <form class="fomEmpresa p-4" action="class/enviarMensaje.php" method="post">
  <div class="mb-3">
    <h5 class="textoenviar mb-4">ENVIAR MENSAJE</h5>
    <!-- <label for="exampleInputEmail1" class="form-label">Correo:</label> -->
    <input type="email" name="correo" class="form-control" placeholder="E-mail" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensaje:</label>
  <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="5"></textarea>
</div>
  <div class="col-12 d-flex justify-content-center pb-3 pt-3">
  <button type="submit" class="btn btn-primary botonEnviarEmpresa">Enviar</button>
  </div>
</form>
                </div>
                <!-- <div class="regresar">
                    <a href="./index.php" class="boton-regresar">Regresar</a>
                </div> -->

            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 cont_img">
            <div class="col-12 descripcion_producto">
                <h4>Búsquedas Destacadas</h4>
                <div class="img_destacadas">
                    
                </div>
                

            </div>
            <div class="col-12 mt-4 flex-column d-flex justify-content-center anunciosEmpresa anunciosE">
            <h5 class="text-center">Promociones</h5>
    <!-- <div class="col-md-6 col-lg-6 promociones__item">
      <img src="src/img/anuncio1.png" alt="">
    </div>
    <div class="col-md-6 col-lg-6 promociones__item">
      <img src="src/img/anuncio2.png" alt="">
    </div> -->
  </div>
  </div>
        </div>
    </div>

    <?php include("./inc/footer.php") ?>
    <script>
      $(document).ready(function(){
        $(".ocultarcat").hide();

      });
    </script>

    <script>
	    $(".buscador-empresa").css("margin-left", "0");


      

    </script>
    <script>

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
      
                let html = `<div class="list-group busc">`;
      
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

                  if (screen.width < 500)  {
                    $(".busc").css("left", "6%");
                  $(".busc").css("top", "76px");
                   }
               

          



      
      
            }else{
              document.getElementById('resultado_busqueda').innerHTML="";
            }
        }
      
      
      
      
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
          <div class="col-md-12 col-lg-12 promociones__item"><a class="col-12 d-flex justify-content-center" href="empresa.php?id=${anuncioEmpresa.id_empresa}"><img src="src/img/${anuncioEmpresa.url_anuncio}" alt=""></a></div>
         
         `;
         
        
        
     }
    }

    mostrarAnuncios();
  
</script>
    <script src="src/js/listarInfoEmpresa.js"></script>
    <!-- <script src="src/js/lightbox.js"></script> -->
    <script src="src/js/simple-lightbox.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
  function addDarkmodeWidget() {


    const options = {
  bottom: '64px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '1s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}
    new Darkmode(options).showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
</body>
</html>