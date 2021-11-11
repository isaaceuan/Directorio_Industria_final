
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



    $sql = "SELECT empresa.nombre, prd.nombre_pruducto, empresa.id
    FROM empresa
    LEFT OUTER JOIN producto as prd ON prd.id_empresa = empresa.id
    WHERE empresa.nombre LIKE '%$query%'
    OR prd.nombre_pruducto LIKE '%$query%'
    AND empresa.miembro = 1 
    LIMIT 5
    ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $data_final = $ejecutar -> fetch_all(MYSQLI_ASSOC);
    

    $replace_string = '<b>'.$condition.'</b>';


    foreach($data_final as $row)
	{

  

    $producto = $row["nombre_pruducto"]." ".$row['nombre'];
    
		$data[] = array(
			'nombre'		=>	str_ireplace($condition, $replace_string,$producto),
      'producto' => $row["nombre_pruducto"],
        'id' => $row['id'] );
	}


    echo json_encode($data);

  }

  public function guardarDatosEmpresa($nombre,$informacion,$archivoF,$pais,$ciudad,$telConLada)
  {
    // $direccionweb = !empty($direccionweb) ? "'$direccionweb'" : "NULL"; 
    // $catalogourl = !empty($catalogourl) ? "'$catalogourl'" : "NULL"; 
    // $whatsapp = !empty($whatsapp) ? "'$iwhatsappntLng'" : "NULL";
    // $videourl = !empty($videourl) ? "'$videourl'" : "NULL"; 


  $sql = "INSERT INTO empresa
    VALUES (NULL, 
    '$nombre',
    NULL, 
    NULL, 
    '$telConLada',
    NULL,
    '$informacion',
    NULL,
    '$archivoF',
   NULL,
    NULL,
    '$pais',
    '$ciudad',
      NULL,
      NULL,
    CURDATE(),
      NULL)";

  $ejecutar = $this -> conexion_db -> query($sql);


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