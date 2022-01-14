
<?php
class Empresa extends Conexion{

  public $empresa;
  public $direccion;
  public $email;
  public $web;
  public $informacion;
  public $logotipo;
  
  public function __construct()
  {
    
    parent::__construct();

  }
  public function mandarCorreoContacto($correo,$mensaje){

// echo $correo .'<br>'. $mensaje;
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';
    //Luego tenemos que iniciar la validación por SMTP:
    $mail->SMTPDebug = 0 ;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
    $mail->Username = "isaac@anpr.org.mx"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
    $mail->Password = "Sistemas2020"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
    $mail->Port = 587;  // Puerto de conexión al servidor de envio.
    $mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS
    //cambiar por contenido@congreso@congresoparques.com
    $mail->setFrom("isaac@anpr.org.mx"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
    $mail->FromName = "ANPR"." "."Directorio de la industria"; //A RELLENAR Nombre a mostrar del remitente.
    $mail->addAddress("isaac@anpr.org.mx"); // Esta es la dirección a donde enviamos
    //Se envía copia oculta a vinculación
    // $mail->addBCC('vinculacion@anpr.org.mx'); 
    
    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = "Registro en el directorio"; // Este es el titulo del email.
    // $mail->msgHTML(file_get_contents('https://anpr.org.mx/informatica/class/templates/basic.html'), __DIR__); // Funciona
    $body = ("Mensaje del directorio de la industria <br> Correo: ".$correo." <br> Mensaje: ".$mensaje);  //Funciona
    // $body .= "Aquí continuamos el mensaje";
    $mail->Body = $body;
    // Mensaje a enviar.
    $exito = $mail->Send(); // Envía el correo.
    if($exito){
      return true;
      }else{ 
        return false;
      }
  }

  public function iconosCategoriaEmpresa($id){

    $sql ="SELECT * FROM empresa_cat
INNER JOIN categorias on empresa_cat.id_cat = categorias.id_cat
WHERE id_empresa = '$id'";

$ejecutar = $this -> conexion_db -> query($sql);

    $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    echo json_encode($data);


  }

  public function nombreEmpresa($nombre){
    $sql = "SELECT * FROM empresa
  
    WHERE nombre = '$nombre' ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);


    if(empty($data)){
      echo json_encode('nada');
    }else{
      echo json_encode('data');
    }

  }

  public function dataEmpresaById($id){
    $sql = "SELECT * FROM empresa
    LEFT OUTER JOIN redes_sociales as rs ON rs.id_empresa = empresa.id
    LEFT OUTER JOIN representante as rep ON rep.id_empresa = empresa.id

    WHERE empresa.id = '$id' ";

    
      $ejecutar = $this -> conexion_db -> query($sql);

      $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

      echo json_encode($data);

  }


  public function imgDestacada($mostrar){
    $sql = "SELECT id, logo_url FROM empresa
    WHERE miembro =  1
    OR miembro = 2
    ORDER BY RAND()
    LIMIT $mostrar";

    
      $ejecutar = $this -> conexion_db -> query($sql);

      $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

      echo json_encode($data);

  }

  public function anuncioEmpresa(){
     $sql = "SELECT * FROM anuncios_empresa
     WHERE fecha_fin >= CURDATE() 
     ORDER BY RAND()
     LIMIT 2";

    
      $ejecutar = $this -> conexion_db -> query($sql);

      $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

      echo json_encode($data);
  }

  public function getHtlmPaisesLatam()
  {
    $bloque = "";

    foreach($this -> allPaisesLatam() as $data)
    {
      $id = $data["id_pais"];

      $nombre = $data["nombre_pais"];

      $bloque .= '<input type="checkbox" name="paises_latam[]" value="'.$id.'"> <label>'.$nombre.'</label>';
    }

    

    return $bloque;

  }
  public function allPaisesLatam()
  {
    
    $sql = "SELECT *
    FROM paises_latam";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    $data = json_encode($result[0]);

    return $result;

  }
  public function guardarPaisesLatam($id_pais,$idEmpresa){

    $result = "";
    foreach($id_pais as $valor)
    {

      // var_dump($data);

      $id_pais_latam = $valor;

      $sql = "INSERT INTO empresa_pais 
      VALUES (NULL,
              $id_pais_latam,
              $idEmpresa)";

      $guardar = $this -> conexion_db -> query($sql);

      if($guardar){
        $result = true;
      }
      else{
        $result = false;
      }

    }

    return $result;


  }


  
  public function dataProductoEmpresaById($id){
    $sql = "SELECT * FROM producto
    WHERE id_empresa = '$id' ";

    
      $ejecutar = $this -> conexion_db -> query($sql);

      $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);


      if(empty($data)){
        $vacio = 'vacio';
        echo json_encode($vacio);
      }else{
        echo json_encode($data);

      }


  }
  public function buscar_data($query){

    $data = array();

    
    $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $query);



    // $sql = "SELECT empresa.nombre, prd.nombre_pruducto, empresa.id ,empresa.miembro
    // FROM empresa
    // LEFT OUTER JOIN producto as prd ON prd.id_empresa = empresa.id
    // WHERE empresa.miembro =1
    // OR empresa.miembro = 2
    // OR empresa.miembro = 3   
    // AND empresa.nombre LIKE '%$query%'
    // OR prd.nombre_pruducto LIKE '%$query%'
    // LIMIT 5
    // ";

    $sql = "SELECT empresa.nombre, prd.nombre_pruducto, empresa.id ,empresa.miembro
    FROM empresa
    LEFT OUTER JOIN producto as prd ON prd.id_empresa = empresa.id

    WHERE empresa.miembro !=0 
	AND prd.nombre_pruducto LIKE '%$query%'
    OR empresa.nombre LIKE '%$query%'

    LIMIT 5";

    $ejecutar = $this -> conexion_db -> query($sql);

    $data_final = $ejecutar -> fetch_all(MYSQLI_ASSOC);
    

    $replace_string = '<b>'.$condition.'</b>';


    foreach($data_final as $row)
	{

  

    $producto = $row["nombre_pruducto"]."- ".$row['nombre'];
    
		$data[] = array(
			'nombre'		=>	str_ireplace($condition, $replace_string,$producto),
      'producto' => $row["nombre_pruducto"],
        'id' => $row['id'] );
	}


    echo json_encode($data);

  }

  public function guardarDatosEmpresa($nombre,$direccion,$pais,$ciudad,$telConLada)
  {
    // $direccionweb = !empty($direccionweb) ? "'$direccionweb'" : "NULL"; 
    // $catalogourl = !empty($catalogourl) ? "'$catalogourl'" : "NULL"; 
    // $whatsapp = !empty($whatsapp) ? "'$iwhatsappntLng'" : "NULL";
    // $videourl = !empty($videourl) ? "'$videourl'" : "NULL"; 

  $sql = "INSERT INTO empresa
    VALUES (NULL, 
    '$nombre',
    '$direccion', 
    NULL, 
    '$telConLada',
    NULL,
    NULL,
    NULL,
    NULL,
   NULL,
    NULL,
    '$pais',
    '$ciudad',
      NULL,
      NULL,
    CURDATE(),
      NULL)";

  $ejecutar = $this -> conexion_db -> query($sql);
// var_dump($ejecutar);


  $this -> empresa = $nombre; 

  return $ejecutar;


  }

  public function gardarRedesSociales($id)
  {

  $sql = "INSERT INTO redes_sociales
    VALUES (NULL,NULL,NULL,NULL,NULL,
    '$id')";

  $ejecutar = $this -> conexion_db -> query($sql);



  return $ejecutar;

  }

  /*Método trae los datos de una empresa por medio del nombre
  */
  public function getEmpresaByNombre()
  {
    // echo $this-> empresa;


    $sql = "SELECT id
    FROM empresa
    ORDER BY id DESC
    LIMIT 1
    ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    // var_dump($data);

    return json_encode($data[0]);

  }

  public function getPaises()
  {

    $sql = "SELECT * 
    FROM lista_paises" ;

    $consulta = $this->conexion_db->query($sql);

    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

    return $resultado;
    
  }
  
  public function getHtmlPaises ()
  {

    $paises = "";

    foreach($this -> getPaises() as $data)
    {

      $lista = $data["pais"];

      $paises .= '<option value="'.$lista.'">'.$lista.'</option>';

    }

    return $paises;
    
  }

  public function validarImg($type, $size)
  {

    if(($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png") && ($size < 5000000))
    {
     
      return true;

    }

    return false;

  }

  //Método setea el nombre de la imagen y la válida devolviendo el nuevo nombre
  public function setImg($img, $size, $type)
  {
    
    $random=bin2hex(random_bytes(2));  //generar cadena random de 4 caracteres 

    $imgName = "anpr-".$random."-".mb_strtolower(str_replace(' ', '-', $img));

   if($this -> validarImg($type, $size))
   {

    return $imgName;

   }

   return false;

  }

  public function guardarImg($img, $tmp_name)
  {

    $dir = $_SERVER['DOCUMENT_ROOT'].'/directorio-back/directorio_industria/src/img';

    // var_dump($dir);
    // var_dump($img);

    if(move_uploaded_file($tmp_name, $dir."/".$img))
    {
      return true;
    }

    return false;

  }


}
?>