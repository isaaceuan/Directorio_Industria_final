<?php
require ("clases.php");
$categorias = new Categoria();
// $producto = new Producto();


if (isset($_POST["query"])) {

    $query = $_POST['query'];

$buscar = $categorias->listarResultadosByQuery($query);
}else{
    $id = $_POST['id'];


    if($id == 0){
        $lista= $categorias->listarCatByIdTotal();
    
    }else{
        $lista= $categorias->listarCatById($id);
    
    }
}



//




?>
