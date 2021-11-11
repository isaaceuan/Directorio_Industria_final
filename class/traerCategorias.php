<?php
require ("clases.php");
$categorias = new Categoria();
// $producto = new Producto();
$id = $_POST['id'];

// echo json_encode($id);
$listar= $categorias->listarTodasLasCategorias($id);


?>

