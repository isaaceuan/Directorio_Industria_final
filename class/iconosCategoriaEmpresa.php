<?php
require ("clases.php");
$empresa = new Empresa();
$id = $_POST['id'];

// echo json_encode($id);
$listar= $empresa->iconosCategoriaEmpresa($id);

// echo json_encode($id);

?>

