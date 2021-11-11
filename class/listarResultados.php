<?php
require ("clases.php");
$categorias = new Categoria();
// $producto = new Producto();

$id = $_POST['id'];




if($id == 0){
    $lista= $categorias->listarCatByIdTotal();

}else{
    $lista= $categorias->listarCatById($id);

}
//




?>
