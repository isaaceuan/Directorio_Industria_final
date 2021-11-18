<?php session_start();
require ("class/conexion.php");
require ("class/empresa.php");
require ("class/categoria.php");

$empresa = new Empresa();
$categorias = new Categoria();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="css/menu_hl.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- <link rel="stylesheet" href="css/styles.css"> -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <title>Registro de Empresas 1</title>

</head>
<body>
<?php include("./inc/header.php") ?>
<?php include("./inc/buscador.php") ?>

<!-- <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
    Button with data-bs-target
  </button>
</p> -->
<div class="fluid-container contenedortablas">
  <div class="row d-flex justify-content-evenly ">
    <div class="col-lg-5 col-xl-3 col-md-5  contenedortabla1">
      <div class="row divrelative">
        <div class="redondo">
          <h3>ANUNCIANTE <br><span>STANDARD</span></h3>
        </div>
      </div>
      <div class="divabsolute">
     <h4>Datos que podrás compartir Con tus posibles clientes</h4>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Nombre de la Empresa</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Dirección</p>
     </div>
     <!-- <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Correo</p>
     </div> -->
     <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Telefono</p>
     </div>
     <a class="botonfree" href="#free" >REGÍSTRATE <br> GRATIS</a>
      </div>
    </div>
    <div class="col-lg-5 col-xl-3 col-md-5 contenedortabla1">
      <div class="row divrelative">
        <div class="redondo">
          <h3>ANUNCIANTE <br><span class="premium">PREMIUM</span></h3>
        </div>
      </div>
      <div class="divabsolute">
     <h4>Datos que podrás compartir Con tus posibles clientes</h4>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Nombre de la Empresa</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Logo</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Dirección</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Correo</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg"></i>
     <p>Telefono</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Web</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Redes Sociales</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Imágenes de productos</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Descripción</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Video</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Catálogos</p>
     </div>
     <div class="contenidogratuito">
     <i class="bi bi-check-lg premium"></i>
     <p>Chat con usuarios</p>
     </div>
     <a class="botonpremium" href="#premium" >ADQUIRIR<br> <span>MEMBRESÍA <br>EMPRESARIAL ANPR</span></a>
      </div>
    </div>
    <div class="col-lg-4 col-xl-3 col-md-5 contenedortabla">
      <div class="titulo">
      <h3>¡SÉ MIEMBRO EMPRESARIAL! Y OBTÉN GRANDES BENEFICIOS</h3>

      </div>
    <div class="cotentenido">
    <div class="contenidodiv">
      <img src="src/img/Recurso 154.png" alt="">
      <p>Certificado digital de miembro</p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 153.png" alt="">
      <p>Beneficios de Anunciante Premium</p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 151.png" alt="">
      <p>3 Membresías Profesionales</p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 152.png" alt="">
      <p>Anuncio de Página Completa en la Revista Parques</p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 149.png" alt="">
      <p>1 Webinar de la industria <span>*Presentación de Zoom</span></p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 149.png" alt="">
      <p>1 Mención de marca en un Podcast Educativo <span>*Mención de 40 segundos</span></p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 148.png" alt="">
      <p>Base de datos de direcciónes y subdirecciones de las principales municipalidades de Ecuador</p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 146.png" alt="">
      <p>10% de descuento en los paquetes de productos publicitarios digitales</p>
    </div>
    <div class="contenidodiv">
      <img src="src/img/Recurso 146.png" alt="">
      <p>10% de descuento en Stands, patrocinios e inscripciones al Congreso Mundial de Parques México 2022</p>
    </div>
    </div>
    </div>

  </div>
</div>

<div class="fluid-containter">
    <div class="col-md-12">
      <div class="row contacto">
        <a class="info" href="http://wa.link/jvkehs">Más información</a>
        <a href="">comercial@anpr.org.mx</a>
        <p>Tel. +52 9999 44 40 60</p>
        </div>
      </div>
</div>

<div class="mostrar" id="collapseExample">
  <div  class="container mt-5 d-flex">
    <form id="free"  class="col-xl-8 col-lg-12 col-md-12 d-flex align-items-center" method="post" action="class/datosForm.php"  enctype="multipart/form-data" onsubmit="return validar()">
      <div class="row">
          <h3 class="text-center titulo-formulario">Registro al directorio de la industria ANPR</h3>
        <label for="exampleInputEmail1" class="form-label">Datos de la empresa</label>
        <div class="col-12">
        <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre de la empresa *" name="nombre">
          <div class="invalid-feedback">El nombre de empresa ya se encuentra registrado</div>
              <div class="valid-feedback">Nombre de empresa disponible</div>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" >
          </div>
          <div class="col-3 mt-3">
            <select id="pais" class="form-select" aria-label="Default select example" required name="pais">
              <option selected value="0">País *</option>
                <?php echo $empresa -> getHtmlPaises(); ?>
            </select>
            </div>

            <div class="col-3 mt-3">
              <input type="text" class="form-control" id="ciudad" aria-describedby="emailHelp" placeholder="Ciudad *" name="ciudad">
            </div>

            <div class="col-md-3 mt-3">
              <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-plus"></i></span>
              <input type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="3" class="form-control col-2" id="lada" aria-describedby="emailHelp" placeholder="Lada *" name="lada">
              </div>
            </div>
            <div class="col-md-3 mt-3">
            <div class="input-group ">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
              <input type="number" class="form-control col-2" id="tel_e" aria-describedby="emailHelp" placeholder="Teléfono *" name="tel_emp">
              </div>
            </div>

          
          </div>
          </div>
        <!-- <div class="col-6">
          <input type="text" class="form-control" id="direccion" placeholder="Dirección *" name="direccion">
        </div> -->
        <!-- <div class="col-6 mt-2">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email *" name="email">
          </div> -->
          <!-- <div class="col-6 mt-2">
            <input type="text" class="form-control" id="telefono" placeholder="Telefono *" name="teléfono">
          </div> -->
          <!-- <div class="col-12 mt-2">
            <input type="text" class="form-control" id="direccionweb" aria-describedby="emailHelp" placeholder="Dirección web" name="direccionweb">
          </div> -->
         
          <!-- <div class="col-6 mt-2">
            <input type="text" class="form-control" id="whatsapp" aria-describedby="WhatsApp" placeholder="WhatsApp" name="whatsapp">
          </div> -->
         
          <!-- <div class="col-6 mt-2">
          <input type="url" class="form-control" id="videourl" aria-describedby="emailHelp" placeholder="Video url" name="videourl" onchange="validarurl(this)">
          </div> -->
          <!-- <div class="col-6 mt-2">
            <input type="url" class="form-control" id="catalogourl" aria-describedby="emailHelp" placeholder="Catálogo url" name="catalogourl">
          </div> -->


         
            <!-- <label for="exampleInputEmail1" class="form-label mt-4">Redes sociales de la empresa:</label>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="facebook" aria-describedby="emailHelp" placeholder="Facebook" name="facebook">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="twitter" aria-describedby="emailHelp" placeholder="Twiter" name="twitter">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="instagram" aria-describedby="emailHelp" placeholder="Instagram" name="instagram">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="youtube" aria-describedby="emailHelp" placeholder="Youtube" name="youtube">
            </div> -->

            <label for="exampleInputEmail1" class="form-label mt-4">Datos del representante:</label>
            <div class="col-3 mt-2">
              <input type="text" class="form-control" id="nom-rep" aria-describedby="emailHelp" placeholder="Nombre *" name="nom-rep">
            </div>
            <div class="col-3 mt-2">
              <input type="number" class="form-control" id="tele-rep" aria-describedby="emailHelp" placeholder="Telefono *" name="tele-rep">
            </div>
            <div class="col-3 mt-2">
              <input type="text" class="form-control" id="puesto-rep" aria-describedby="emailHelp" placeholder="Cargo *" name="puesto-rep">
            </div>
            <div class="col-3 mt-2">
              <input type="email" class="form-control" id="correo-rep" aria-describedby="emailHelp" placeholder="Email *" name="correo-rep">
            </div>
            <!-- <div class="col-12 mt-2">
              <input type="url" class="form-control" id="link-rep" aria-describedby="emailHelp" placeholder="Link Higherlogic" name="link-rep">
            </div> -->
            <!-- <div id="" class="col-12 mt-2">
                <input type="file" id="file2" name="foto" class="form-control" placeholder="Foto" onchange="ValidateSingleInput(this);">Fotografía del representante *
            </div> -->
            <label for="exampleInputEmail1" class="form-label mt-4">Categorías (Selecciona al menos 1): *</label>



            <div class="col-12 mt-2 otro">

              <?php echo $categorias -> getHtmlCategorias(); ?>

              </div>

          
            <!-- <label for="exampleInputEmail1" class="form-label mt-4">Productos (Máximo 8):</label>
            <div id="listas" class="col-12 mt-2">
                <input type="text" name="nom-prod[]" id="nombre-prod" class="form-control" placeholder="Nombre del Producto *">
            </div> -->
            <!-- <div id="listas" class="col-12 mt-2">
          <textarea class="form-control text-a" id="desc-prod" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>
          </div> -->
            <!-- <div id="listas1" class="col-12 mt-2">
                <input type="file" id="file3" name="archivo[]" class="form-control imgproducto" placeholder="Foto del producto" onchange="ValidateSingleInput(this);" >Imagen producto *
            </div>
            <div class="col-12 mt-2">
            <input type="button" id="add_field" value="Agregar otro producto" class="btn btn-success">
            </div> -->
          
        <div class="col-12 text-center mt-4">

        <button type="submit" class="btn btn-success  m-auto">Registrarme Gratis</button>
        <!-- <a id="boton1" class="btn btn-primary" >
        Ser empresa ANPR</a> -->
        </div>
      </div>
    </form>

    <div class="col-xl-4 col-md-12  imgtext">
      <h3>ANUNCIANTE PREMIUM</h3>
      <p>Y ofrece tus productos o servicios <br>de una forma más eficaz.</p>
      
      <figure class="img">
      <img src="src/img/Recurso 144.png" alt="">
    </figure>
    </div>
    
  </div>
  </div>


  <div  class="ocultar" id="premium">
  <div  class="container mt-5 d-flex">
    
  <form  class="col-xl-8 col-lg-12 col-md-12 d-flex align-items-center" method="post" action="class/datosFormPremium.php"  enctype="multipart/form-data" onsubmit="return validar_premium()">
      <div class="row">
      <h3 class="text-center titulo-formulario">Registro al directorio de la industria ANPR</h3>
        <label for="exampleInputEmail1" class="form-label">Datos de la empresa</label>
        <div class="col-6">
          <input type="text" class="form-control" id="nombre1" aria-describedby="emailHelp" placeholder="Nombre de la empresa *" name="nombre">
        </div>
        <div class="col-6">
          <input type="text" class="form-control" id="direccion1" placeholder="Direccion *" name="direccion">
        </div>
        <div class="col-6 mt-2">
            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Email *" name="email">
          </div>
          <div class="col-md-3 mt-2">
              <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-plus"></i></span>
              <input type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="3" class="form-control col-2" id="lada1" aria-describedby="emailHelp" placeholder="Lada *" name="lada">
              </div>
            </div>
            <div class="col-md-3 mt-2">
            <div class="input-group ">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
              <input type="number" class="form-control col-2" id="tel_e1" aria-describedby="emailHelp" placeholder="Teléfono *" name="tel_emp">
              </div>
            </div>
          <div class="col-12 mt-2">
            <input type="text" class="form-control" id="direccionweb1" aria-describedby="emailHelp" placeholder="Direccion web" name="direccionweb">
          </div>
          <div class="col-12 mt-2">
          <textarea class="form-control" id="informacion1" placeholder="Informacion de la empresa *" rows="3" name="informacion"></textarea>
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="whatsapp1" aria-describedby="WhatsApp" placeholder="WhatsApp" name="whatsapp">
          </div>
          <div class="col-6 mt-2">
            <input type="file" class="form-control" id="files1" name="file" onchange="ValidateSingleInput(this);">Logo empresa *
          </div>
          <div class="col-6 mt-2">
            <input type="url" class="form-control" id="videourl1" aria-describedby="emailHelp" placeholder="Video url" name="videourl" onchange="validarurl(this)">
          </div>
          <div class="col-6 mt-2">
            <input type="url" class="form-control" id="catalogourl1" aria-describedby="emailHelp" placeholder="Catalogo url" name="catalogourl">
          </div>

          <div class="col-6 mt-2">
            <select id="pais1" class="form-select" aria-label="Default select example" required name="pais">
              <option selected value="0">Selecciona un pais *</option>
                <?php echo $empresa -> getHtmlPaises(); ?>
            </select>
            </div>

            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="ciudad1" aria-describedby="emailHelp" placeholder="Ciudad *" name="ciudad">
            </div>
            <label for="exampleInputEmail1" class="form-label mt-4">Redes sociales de la empresa:</label>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="facebook1" aria-describedby="emailHelp" placeholder="Facebook" name="facebook">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="twitter1" aria-describedby="emailHelp" placeholder="Twiter" name="twitter">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="instagram1" aria-describedby="emailHelp" placeholder="Instagram" name="instagram">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="youtube1" aria-describedby="emailHelp" placeholder="Youtube" name="youtube">
            </div>

            <label for="exampleInputEmail1" class="form-label mt-4">Datos del represetante de la empresa:</label>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="nom-rep1" aria-describedby="emailHelp" placeholder="Nombre *" name="nom-rep">
            </div>
            <div class="col-6 mt-2">
              <input type="number" class="form-control" id="tele-rep1" aria-describedby="emailHelp" placeholder="Telefono *" name="tele-rep">
            </div>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="puesto-rep1" aria-describedby="emailHelp" placeholder="Puesto representante *" name="puesto-rep">
            </div>
            <div class="col-6 mt-2">
              <input type="email" class="form-control" id="correo-rep1" aria-describedby="emailHelp" placeholder="Correo-representante *" name="correo-rep">
            </div>
            <div class="col-12 mt-2">
              <input type="url" class="form-control" id="link-rep1" aria-describedby="emailHelp" placeholder="Link Higherlogic" name="link-rep">
            </div>
            <div id="" class="col-12 mt-2">
                <input type="file" id="files2" name="foto" class="form-control" placeholder="Foto" onchange="ValidateSingleInput(this);">Fotografía del representante *
            </div>
            <label for="exampleInputEmail1" class="form-label mt-4">Categorías (Selecciona almenos 1): *</label>



            <div class="col-12 mt-2 otro">

              <?php echo $categorias -> getHtmlCategorias(); ?>

              </div>

          
            <label for="exampleInputEmail1" class="form-label mt-4">Productos (Máximo 6):</label>
            <div id="listas" class="col-12 mt-2">
                <input type="text" name="nom-prod[]" id="nombre-prod1" class="form-control" placeholder="Nombre del Producto *">
            </div>
          <!--  <div id="listas" class="col-12 mt-2">-->
          <!--<textarea class="form-control text-a" id="desc-prod" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>-->
          <!--</div>-->
            <div id="listas1" class="col-12 mt-2">
                <input type="file" id="files3" name="archivo[]" class="form-control imgproducto" placeholder="Foto del producto" onchange="ValidateSingleInput(this);" >Imagen producto *
            </div>
            
            <div class="col-12 mt-2">
            <input type="button" id="add_field" value="Agregar Producto" class="btn btn-success">
            </div>
            <!-- <div class="col-12 mt-2 codigo">
            <label for="exampleInputEmail1" class="form-label mt-4">Codigo de activación:</label>

            <input type="text" class="form-control" id="codAct" aria-describedby="emailHelp" placeholder="Codigo de activación *" name="ca1" required>
              <div class="invalid-feedback">Codigo de activación invalido</div>
              <div class="valid-feedback">Codigo activación valido</div>
            </div> -->
        <div class="col-12 text-center mt-4">

        <button type="submit" class="btn btn-success m-auto">Registrarme Premium</button>
        <!-- <a id="boton" class="btn btn-primary" >
        Formulario Anterior</a> -->
        </div>
      </div>
    </form>   
    <div class="col-xl-4 col-lg-12 col-md-12 imgtext">
      <h3>ANUNCIANTE PREMIUM</h3>
      <p>Y ofrece tus productos o servicios <br>de una forma más eficaz.</p>
      
      <div class="img">
      <img src="src/img/Recurso 144.png" alt="">
      </div>
    </div> 
  </div>
  </div>

    </div>
    <?php include("./inc/footer.php") ?>
    <script>

$(document).ready(function(){
  
  $(".ocultarcat").hide();
    $(".ocultar").hide();
    $(".botonfree").on("click",function(){
        // $(".ocultar").show();
        // $(".mostrar").toggle("slow");
        $(".ocultar").hide();
        $(".mostrar").show();
    });
    $(".botonpremium").on("click",function(){
        $(".ocultar").show();
        $(".mostrar").hide();

    });
});

setTimeout(function(){
$( "a" ).click(function( event ) {
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });

 }, 1000);



</script>
<script>
    const codAct =  document.getElementById('codAct')

codAct.addEventListener('blur', async function(e){
  const queryString = window.location.search;

const urlParams = new URLSearchParams(queryString);

const page_type = urlParams.get('id');

const data = new FormData();
data.append('codAct',this.value);

const peticion2 = await fetch('../../miembros3/class/codigoActProducto.php',{
        method: 'POST',
        body : data
    })
    
    const resp2 = await peticion2.json();
    console.log(resp2);

    if(resp2 === 'vacio'){
      const codAct =  document.getElementById('codAct');
      const codAct2 =  document.getElementById('codAct').classList.add('is-invalid');
      const codAct3 =  document.getElementById('codAct').classList.remove("is-valid")

      codAct.value = "";
    }if(resp2 === 'ok'){
      const codAct4 =  document.getElementById('codAct').classList.add('is-valid');
      const codAct5 =  document.getElementById('codAct').classList.remove('is-invalid');

    }

});
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
  
  
  
        }else{
          document.getElementById('resultado_busqueda').innerHTML="";
        }
    }
  
  
  
  
  </script>

  <script>
    const nombreEmpresa =  document.getElementById('nombre');

    nombreEmpresa.addEventListener('blur', async function(e){
 
const data = new FormData();
data.append('nombre',this.value);

const peticion2 = await fetch('class/nombreEmpresa.php',{
        method: 'POST',
        body : data
    })
    
    const resp2 = await peticion2.json();
    console.log(resp2);

    if(resp2 === 'data'){
      const nombre_validar =  document.getElementById('nombre');
      document.getElementById('nombre').classList.add('is-invalid');
      document.getElementById('nombre').classList.remove("is-valid")

      nombre_validar.value = "";
    }if(resp2 === 'nada'){
      document.getElementById('nombre').classList.add('is-valid');
     document.getElementById('nombre').classList.remove('is-invalid');

    }

});

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/js/validar.js"></script>
    <script src="src/js/agregarCampo.js"></script>
    <!-- <script src="src/js/agregarCampo.js"></script> -->



</body>
</html>