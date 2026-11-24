<?php 
include("../includes/db.php");

$usuario =$_POST["usuario"];
$password =$_POST["password"];
$role =$_POST["role"];
$email =$_POST["email"];


$sql= 
"INSERT INTO `usuarios`(`usuario`, `password`, `role`, `email`, `created_at`, `updated_at`) 
VALUES ('$usuario','$password','$role', '$email', NOW(), NOW())";

$conexion-> query($sql);

header("Location:listado.php?mensaje=insertado");
exit;
?>