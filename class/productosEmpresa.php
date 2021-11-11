<?php
require ("clases.php");
$categorias = new Empresa();
// $producto = new Producto();
$id = $_POST['id'];

// echo json_encode($id);
$listar= $categorias->dataProductoEmpresaById($id);
// $listar2= $categorias->dataEmpresaById2($id);

// echo json_encode($id);

?>

