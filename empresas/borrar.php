<?php 
include("../includes/db.php");

$id= $_GET["id"];

$sql = "DELETE FROM empresas WHERE id=$id";

$conexion->query($sql);
header("Location:listado.php?mensaje=eliminado");
exit;
?>