<?php 
include("../includes/db.php");

$nombre_comercial =$_POST["nombre_comercial"];
$razon_social =$_POST["razon_social"];
$cif =$_POST["cif"];
$direccion =$_POST["direccion"];
$codigopostal =$_POST["codigopostal"];
$email =$_POST["email"];
$id_provincias = 1;
$id_localidades = 1;
$id_usuarios = 1;
$fecha = date("Y-m-d H:i:s");


$sql= 
"INSERT INTO `empresas`(`nombre_comercial`, `razon_social`, `cif`, `direccion`, `codigopostal`, `id_provincias`, `id_localidades`, `id_usuarios`, `email`, `created_at`, `updated_at`) 
VALUES ('$nombre_comercial','$razon_social','$cif','$direccion','$codigopostal','$id_provincias','$id_localidades','$id_usuarios','$email','$fecha','$fecha')";

$conexion-> query($sql);

header("Location:listado.php?mensaje=insertado");
exit;
?>