<?php 
include("../includes/db.php");

$id= $_POST["id"];
$usuario= $_POST["usuario"];
$password= $_POST["password"];
$role= $_POST["role"];
$email= $_POST["email"];


$sql= "UPDATE usuarios SET 

usuario = '$usuario',
password = '$password',
role = '$role',
email = '$email',
updated_at = NOW() 
WHERE id = $id";

$conexion->query($sql);
header("Location:listado.php?mensaje=actualizado");
exit;
?>