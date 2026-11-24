<?php 
include("../includes/db.php");

$id= $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id=$id";

$conexion->query($sql);
header("Location:listado.php?mensaje=eliminado");
exit;
?>