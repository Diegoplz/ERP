<?php 
include("../includes/db.php");

$id= $_POST["id"];
$nombre_comercial = $_POST["nombre_comercial"];
$razon_social = $_POST["razon_social"];
$cif = $_POST["cif"];
$direccion = $_POST["direccion"];
$codigopostal = $_POST["codigopostal"];
$email = $_POST["email"];
$fecha = date("Y-m-d H:i:s");


$sql= "UPDATE empresas SET 

nombre_comercial = '$nombre_comercial',
razon_social = '$razon_social',
cif = '$cif',
direccion = '$direccion',
codigopostal = '$codigopostal', 
email = '$email', 
updated_at = '$fecha'

WHERE id = '$id'";

mysqli_query($conexion,$sql);
header("Location:listado.php?mensaje=actualizado");
exit;
?>