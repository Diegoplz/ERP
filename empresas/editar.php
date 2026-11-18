<?php 
$ruta="../";

include("../includes/sesion.php");
include("../includes/db.php");

$id=$_GET["id"];

$sql="SELECT * FROM usuarios WHERE id=$id";

$resultado=$conexion->query($sql);
$fila= $resultado->fetch_assoc();// fila contendra todos los datos del usuario
?>

<!doctype html>
<html lang="es">

<?php include("../includes/head.php"); ?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper"> 
    <?php include("../includes/header.php"); ?> 
    <?php include("../includes/sidebar.php"); ?>

    <main class="app-main">      
        <form action="actualizar.php" method="POST">
    
    <input type="hidden" name="id" value="<?php echo $fila["id"]; ?>">
    

    <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" value="<?php echo $fila["usuario"]; ?>">
    </div>

    <div class="mb-3">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" value="<?php echo $fila["password"]; ?>">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $fila["email"]; ?>">
    </div>

    <div class="mb-3">
        <label>Rol</label>

        <select name="role" class="form-select">

            <option value="Administrador" 
            <?php if($fila["role"]=="Administrador") echo "selected"; ?>>Administrador</option>
            <option value="Empresa" 
            <?php if($fila["role"]=="Empresa") echo "selected"; ?>>Empresa</option>
            <option value="Alumno" 
            <?php if($fila["role"]=="Alumno") echo "selected"; ?>>Alumno</option>

        </select>

    </div>

    <button class="btn btn-success">
        Guardar
    </button>

    <a href="listado.php" class="btn btn-secondary">
        Cancelar
    </a>

</form>
    </main>  
    
    <?php include("../includes/footer.php"); ?>  
  </div>
    <?php include("../includes/scripts.php"); ?>
</body>
</html>
