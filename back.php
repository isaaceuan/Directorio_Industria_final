<div class="mostrar" id="collapseExample">
  <div  class="container mt-5 d-flex">
    <form  class="col-8 d-flex align-items-center" method="post" action="class/datosForm.php"  enctype="multipart/form-data" onsubmit="return validar()">
      <div class="row">
          <h3 class="text-center titulo-formulario">Registro al directorio de la industria ANPR</h3>
        <label for="exampleInputEmail1" class="form-label">Datos de la empresa</label>
        <div class="col-6">
        <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre de la empresa *" name="nombre">
          <div class="invalid-feedback">El nombre de empresa ya se encuentra registrado</div>
              <div class="valid-feedback">Nombre de empresa disponible</div>
        </div>
        <div class="col-6">
            <input type="file" class="form-control" id="file" name="file" onchange="ValidateSingleInput(this);">Logo empresa *
          </div>
          <div class="col-6 mt-2">
            <select id="pais" class="form-select" aria-label="Default select example" required name="pais">
              <option selected value="0">Seleccionar país *</option>
                <?php echo $empresa -> getHtmlPaises(); ?>
            </select>
            </div>

            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="ciudad" aria-describedby="emailHelp" placeholder="Ciudad *" name="ciudad">
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
          <div class="col-6">
          <textarea class="form-control" id="informacion" placeholder="Información de la empresa *" rows="4" name="informacion"></textarea>
          </div>
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

            <label for="exampleInputEmail1" class="form-label mt-4">Datos del representante de al empresa:</label>
            <div class="col-3 mt-2">
              <input type="text" class="form-control" id="nom-rep" aria-describedby="emailHelp" placeholder="Nombre *" name="nom-rep">
            </div>
            <div class="col-3 mt-2">
              <input type="number" class="form-control" id="tele-rep" aria-describedby="emailHelp" placeholder="Telefono *" name="tele-rep">
            </div>
            <div class="col-3 mt-2">
              <input type="text" class="form-control" id="puesto-rep" aria-describedby="emailHelp" placeholder="Puesto representante *" name="puesto-rep">
            </div>
            <div class="col-3 mt-2">
              <input type="email" class="form-control" id="correo-rep" aria-describedby="emailHelp" placeholder="Correo-representante *" name="correo-rep">
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

        <button type="submit" class="btn btn-success  m-auto">Guardar</button>
        <a id="boton1" class="btn btn-primary" >
        Ser empresa ANPR</a>
        </div>
      </div>
    </form>
    
  </div>
  </div>


  <div class="ocultar" id="collapseExample1">
  <div  class="container mt-5 d-flex">
    
  <form  class="col-8 d-flex align-items-center" method="post" action="../../miembros3/class/datosFormPremium.php"  enctype="multipart/form-data" onsubmit="return validar_premium()">
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
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="telefono1" placeholder="Telefono *" name="telefono">
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

            <label for="exampleInputEmail1" class="form-label mt-4">Datos del represetante de al empresa:</label>
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
            <label for="exampleInputEmail1" class="form-label mt-4">Categorias (Selecciona almenos 1): *</label>



            <div class="col-12 mt-2 otro">

              <?php echo $categorias -> getHtmlCategorias(); ?>

              </div>

          
            <label for="exampleInputEmail1" class="form-label mt-4">Productos (Máximo 6):</label>
            <div id="listas" class="col-12 mt-2">
                <input type="text" name="nom-prod1[]" id="nombre-prod1" class="form-control" placeholder="Nombre del Producto *">
            </div>
          <!--  <div id="listas" class="col-12 mt-2">-->
          <!--<textarea class="form-control text-a" id="desc-prod" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>-->
          <!--</div>-->
            <div id="listas1" class="col-12 mt-2">
                <input type="file" id="files3" name="archivo1[]" class="form-control imgproducto" placeholder="Foto del producto" onchange="ValidateSingleInput(this);" >Imagen producto *
            </div>
            
            <div class="col-12 mt-2">
            <input type="button" id="add_field" value="Agregar Producto" class="btn btn-success">
            </div>
            <div class="col-12 mt-2 codigo">
            <label for="exampleInputEmail1" class="form-label mt-4">Codigo de activacion:</label>

            <input type="text" class="form-control" id="codAct" aria-describedby="emailHelp" placeholder="Codigo de activación *" name="ca1" required>
              <div class="invalid-feedback">Codigo de activación invalido</div>
              <div class="valid-feedback">Codigo activación valido</div>
            </div>
        <div class="col-12 text-center mt-4">

        <button type="submit" class="btn btn-success m-auto">Guardar</button>
        <a id="boton" class="btn btn-primary" >
        Formulario Anterior</a>
        </div>
      </div>
    </form>    
  </div>
  </div>