<?php
require ("clases.php");
$categorias = new Categoria();
// $producto = new Producto();

$query = $_POST['query'];


$buscar = $categorias->listarResultadosByQuery($query);

// if($id == 0){
//     $lista= $categorias->listarCatByIdTotal();

// }else{
//     $lista= $categorias->listarCatById($id);

// }
// //

// echo json_encode($query);


?>
