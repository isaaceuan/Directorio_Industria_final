<?php
require('phpmailer/src/PHPMailer.php');
require('phpmailer/src/Exception.php');
require('phpmailer/src/SMTP.php');

class Categoria extends Empresa
{

  public $categoria;
  
  public function __construct()
  {
    parent::__construct();
  }


  public function fotoCategorias() {
    $sql = "SELECT *
    FROM categorias
    WHERE id_cat > 0
    ORDER BY RAND()
     LIMIT 4;" ;

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    echo json_encode($result);


  }
  public function allCategorias()
  {
    
    $sql = "SELECT *
    FROM categorias WHERE id_cat > 0";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    $data = json_encode($result[0]);

    return $result;

  }

  /*Método que hace una consulta a la tabla empresas y devuelve un array con las empresas
  de dicha categoría*/
  public function getCategoria($categoria)
  {

    $sql = "SELECT * 
    FROM empresa_cat 
    LEFT JOIN categorias
    ON empresa_cat.id_cat = categorias.id_cat
    LEFT JOIN empresas 
    ON empresa_cat.id_empresa = empresas.id
    WHERE empresa_cat.id_cat = '$categoria' ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    return $result;

  }

  public function getHtmlCategorias()
  {
    $bloque = "";

    foreach($this -> allCategorias() as $data)
    {
      $id = $data["id_cat"];

      $categoria = $data["categoria"];

      $bloque .= '<input type="checkbox" name="categoria[]" value="'.$id.'"> <label>'.$categoria.'</label>';
    }

    return $bloque;

  }

  //Método que recibe un array de categorias para guardar en la tabla cat_membresia
  public function guardarCatEmpresa($arrayCat, $idEmpresa,$nombre,$correo_rep)
  {

    $result = false;
    // var_dump($arrayCat);
    foreach($arrayCat as $valor)
    {

      // var_dump($data);

      $idCategoria = $valor;

      $sql = "INSERT INTO empresa_cat 
      VALUES ( $idCategoria,
              $idEmpresa)";

      $guardar = $this -> conexion_db -> query($sql);

      if($guardar){
        $result = true;
      }
      else{
        $result = false;
      }

    }

    $this-> enviarCorreoRobert($nombre, $correo_rep);
    
    return $result;

  }

  public function enviarCorreoRobert($nombre, $correo_rep){

    $mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';
//Luego tenemos que iniciar la validación por SMTP:
$mail->SMTPDebug = 0 ;
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
$mail->Username = "soporte@anpr.org.mx"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
$mail->Password = "anpr2018*!"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
$mail->Port = 587;  // Puerto de conexión al servidor de envio.
$mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS
//cambiar por contenido@congreso@congresoparques.com
$mail->setFrom("soporte@anpr.org.mx"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
$mail->FromName = "ANPR"." "."Directorio de la industria"; //A RELLENAR Nombre a mostrar del remitente.
$mail->addAddress('isaac@anpr.org.mx'); // Esta es la dirección a donde enviamos
//Se envía copia oculta a vinculación
// $mail->addBCC('vinculacion@anpr.org.mx'); 

$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Registro en el directorio"; // Este es el titulo del email.
// $mail->msgHTML(file_get_contents('https://anpr.org.mx/informatica/class/templates/basic.html'), __DIR__); // Funciona
$body = ("La empresa ".$nombre." se ha registrado en el directorio de la industria y el correo del representante es: ".$correo_rep);  //Funciona
// $body .= "Aquí continuamos el mensaje";
$mail->Body = $body;
// Mensaje a enviar.
$exito = $mail->Send(); // Envía el correo.
// if($exito){
//    echo 'El correo fue enviado correctamente.'; 
//   }else{ 
//     echo 'Hubo un problema. Contacta a un administrador.'; 
//   }


  }



  public function listarCategorias(){

    $sql = "SELECT * 
    FROM categorias
    ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

      echo json_encode($result);
    
    

      // echo json_encode($result);



  }


  public function listarCatById($id){

    $sql = "SELECT * FROM empresa 
    INNER JOIN empresa_cat ON empresa.id = empresa_cat.id_empresa
    INNER JOIN categorias on empresa_cat.id_cat = categorias.id_cat
    INNER JOIN representante on representante.id_empresa = empresa.id


    AND categorias.id_cat = '$id' 
    WHERE empresa.miembro = 1 OR empresa.miembro = 0

    ORDER BY empresa.miembro DESC" ;

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    if(empty($result)){
      $vacio = 'vacio';
      echo json_encode($vacio);

    }else{

    

      echo json_encode($result);
    }
    

      // echo json_encode($result);



  }


  public function listarCatByIdTotal(){

    $sql = "SELECT * FROM empresa 
      INNER JOIN representante on representante.id_empresa = empresa.id
      WHERE empresa.miembro = 1 
      OR empresa.miembro = 0

    ORDER BY empresa.miembro DESC" ;

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    if(empty($result)){
      $vacio = 'vacios';
      echo json_encode($vacio);

    }else{

    

      echo json_encode($result);
    }
    

      // echo json_encode($result);



  }

  
  public function listarTodasLasCategorias($id){

    $sql = "SELECT categoria FROM categorias 
      WHERE id_cat = '$id'" ;
    

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    
 
    

      echo json_encode($result[0]);



  }





}
?>