<?php

class Producto extends Empresa
{
  public function __construct()
  {
    
    parent::__construct();
  }

  public function guardarProducto($producto, $foto, $idEmpresa)
  {


    

    

        // $producto1 = $producto[$i];

        // $descripcionProducto = $descripcion[$i];
        // $foto = $foto[$i];
        // $idEmpresa = $idEmpresa[$i];



        // $foto = $this -> setImg($foto[$i]);


          // $this -> guardarImg($foto);

          $sql = "INSERT INTO producto
                  VALUES (NULL,
                  '$producto', 
                  '$foto', 
                  '$idEmpresa')";

      $ejecutar = $this -> conexion_db -> query($sql);
      return $ejecutar;


  
    


    


  }

  // El método consulta los productos de una empresa y devuelve el resultado en un array 
  public function getProductos($empresa)
  {

    $sql = "SELECT *
    FROM productos 
    WHERE id_empresa = '$empresa' ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    return $result;

  }


  
}
?>