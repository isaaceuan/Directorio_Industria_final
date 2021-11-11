<?php 
require ("conexion.php");
require ("empresa.php");

$nom_empresa = $_POST["nombre"];


//  echo json_encode($codigoAct);

$codigo = new Empresa();

$nombreEmpresa = $codigo->nombreEmpresa($nom_empresa); 
 ?>