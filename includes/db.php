<?php
$conexion = new mysqli("localhost","root","","bolsadeempleo");
$conexion->set_charset("utf8");
if($conexion->connect_error){
    die("Error de conexion");
}
?>