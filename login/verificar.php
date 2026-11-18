<?php 
session_start();
include("../includes/db.php");

$usuario= $_POST["usuario"];
$password= $_POST["password"];

$sql= "SELECT * FROM usuarios WHERE usuario='$usuario'";

$resultado = $conexion-> query($sql);

if($resultado-> num_rows > 0){
    
    $fila=  $resultado-> fetch_assoc();

    if($fila["password"]==$password){
        $_SESSION["id"]= $fila["id"];
        $_SESSION["usuario"]= $fila["usuario"];
        $_SESSION["role"]= $fila["role"];
        
        header("Location:../index.php");
        exit;
    }else{
        echo "Contraseña incorrecta";
    }
}else{
    echo "Usuario no existe";
}


?>