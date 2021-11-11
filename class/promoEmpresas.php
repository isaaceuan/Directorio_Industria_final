<?php
require ("clases.php");
$anuncio = new Empresa();
// $producto = new Producto();
// $mostrar = $_POST['mostrar'];

// echo json_encode($id);
$listar= $anuncio->anuncioEmpresa();
// $listar2= $categorias->dataEmpresaById2($id);

// echo json_encode($id);

?>

