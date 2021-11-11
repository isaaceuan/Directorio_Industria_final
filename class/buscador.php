<?php
require ("clases.php");
$categorias = new Empresa();
// $producto = new Producto();

$data = $_POST['resultado'];



// echo json_encode($data);

//
$lista= $categorias->buscar_data($data);




?>

