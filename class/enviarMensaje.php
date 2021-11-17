<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require ("clases.php");
$empresa = new Empresa();
// $producto = new Producto();
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// echo $correo .'<br>'. $mensaje;


$enviarMensaje= $empresa->mandarCorreoContacto($correo,$mensaje);


if($enviarMensaje ){
    echo '<script>
                  Swal.fire({ title: "Mensaje enviado",
                      text: "Tu mensaje se envio correctamente",
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


?>

