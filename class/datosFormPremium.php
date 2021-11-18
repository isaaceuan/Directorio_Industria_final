<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
require ("../../../miembros3/class/clases.php");
$datosForm= new Empresa();
$representante = new Representante();
$categorias = new Categoria();
$producto = new Producto();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $telefono = $_POST["tel_emp"];
    $lada = $_POST["lada"];
    $direccionweb = $_POST["direccionweb"];
    $informacion = $_POST["informacion"];
    $whatsapp = $_POST["whatsapp"];
    $videourl = $_POST["videourl"];
    $catalogourl = $_POST["catalogourl"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];

    $logotipo = $_FILES["file"]["name"];
    $tmp_name_logotipo = $_FILES["file"]["tmp_name"];
    $size_logotipo = $_FILES["file"]["size"];
    $type_logotipo = $_FILES["file"]["type"];
    $miembro = 0;
    $telConlada = $lada." ".$telefono;

    // var_dump($logotipo);
     //setear las imagenes antes de guardarlas
    $logotipo = $datosForm -> setImg($logotipo, $size_logotipo, $type_logotipo);

    // var_dump($logotipo);

    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $youtube = $_POST["youtube"];


    if (isset($_POST["ca1"])) {
        $ca = $_POST["ca1"];   
     } else {    
         $ca = "";   
     }

   //guardar en la carpeta
    $datosForm -> guardarImg($logotipo, $tmp_name_logotipo);
  
    //guardar los datos de la empresa
    // echo $nombre,$direccion,$email,$telefono,$direccionweb,$informacion,$whatsapp,$videourl,$catalogourl,$archivoF;
    $guardarEmpresa = $datosForm->guardarDatosEmpresa($nombre,
                                $direccion,
                                $email,
                                $telConlada,
                                $direccionweb,
                                $informacion,
                                $whatsapp,
                                $videourl,
                                $catalogourl,
                                $logotipo,
                                $pais,
                                $ciudad,
                                $ca,
                                $miembro
                               );
    
    //obtener el id de la empresa
    $dataEmpresa = json_decode($datosForm -> getEmpresaByNombre($nombre));

    $idEmpresa = $dataEmpresa -> id;

    $datosRedesSociales= $datosForm->gardarRedesSociales($facebook,
                                                            $twitter,
                                                            $instagram,
                                                            $youtube,
                                                            $idEmpresa);


    /* === Valores de los campos del formulario para el representante */
    $nomRepresentante = $_POST["nom-rep"];
    $telRepresentante = $_POST["tele-rep"];
    $correo = $_POST["correo-rep"];
    $urlHL = $_POST["link-rep"];
    $puesto = $_POST["puesto-rep"];
    $foto = $_FILES["foto"]["name"];
    $tmp_name_foto = $_FILES["foto"]["tmp_name"];
    $size_foto = $_FILES["foto"]["size"];
    $type_foto = $_FILES["foto"]["type"];
    
    $foto = $datosForm -> setImg($foto, $size_foto, $type_foto);

    // var_dump($foto);

    $datosForm -> guardarImg($foto, $tmp_name_foto);

    $dataRepresentante= [
        "nombre" => "$nomRepresentante",
        "telefono" => "$telRepresentante",
        "correo" => "$correo",
        "puesto" => "$puesto",
        "urlHL" => "$urlHL",
        "foto" => "$foto",
        "idEmpresa" => "$idEmpresa"
        ];
  
    $dataRepresentante = json_encode($dataRepresentante);
    
    $guardarRepresentante = $representante -> guardarRepresentante($dataRepresentante);
 
    //array de categorias seleccionadas
    $categoria = $_POST["categoria"];
        $saveCategorias = $categorias -> guardarCatEmpresa($categoria, $idEmpresa);

    

 
    $foto_prd = $_FILES['archivo']['name'];

    foreach ($foto_prd as $i => $value) { 


        $foto_prd = $_FILES['archivo']['name'][$i];
        $tmp_name_foto_prd = $_FILES["archivo"]["tmp_name"][$i];
        $size_foto_prd = $_FILES["archivo"]["size"][$i];
        $type_foto_prd = $_FILES["archivo"]["type"][$i];
        $productos = $_POST["nom-prod"][$i];
        // $descripcionProducto = $_POST["desc-prod"][$i];

        // var_dump($productos);

        // Upload file to $path
        $foto_nombre_prd = $datosForm -> setImg($foto_prd, $size_foto_prd, $type_foto_prd);
            // $foto_pro= explode(" ",$foto_nombre_prd);
            // var_dump($foto_pro);
        $guardar_productos =  $producto -> guardarProducto($productos, $foto_nombre_prd, $idEmpresa);
        if($guardar_productos){
            $datosForm -> guardarImg($foto_nombre_prd, $tmp_name_foto_prd);

        }


        
   }

    

    if($guardarEmpresa || $guardarRepresentante || $guardar_productos ){
        echo '<script>
                      Swal.fire({ title: "Registro completo",
                          text: "Tu registro se ha guardado con éxito, nos pondremos en contancto contigo",
                          icon: "success",customClass: "swal-wide",}).then(okay => {
                            if (okay) {
                             window.location.href = "../index.php";
                           }
                         });
                    
                  </script>';
    }else{
        echo  '<script>
        Swal.fire({ title: "Error",
            text: "Hubo un problema al gardar los datos, intentalo mas tarde nuevamente",
            icon: "error",customClass: "swal-wide",}).then(okay => {
              if (okay) {
               window.location.href = "../index.php";
             }
           });
      
    </script>';
        }
        



    }


?>

