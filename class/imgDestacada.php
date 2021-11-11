<?php
require ("clases.php");
$categorias = new Empresa();
// $producto = new Producto();
$mostrar = $_POST['mostrar'];

// echo json_encode($id);
$listar= $categorias->imgDestacada($mostrar);
// $listar2= $categorias->dataEmpresaById2($id);

// echo json_encode($id);

?>

