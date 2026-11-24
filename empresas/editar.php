<?php 
$ruta="../";

include("../includes/sesion.php");
include("../includes/db.php");

$id=$_GET["id"];

$sql="SELECT * FROM empresas WHERE id=$id";

$resultado=$conexion->query($sql);
$fila= $resultado->fetch_assoc();// fila contendra todos los datos de la empresa
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
        <label>Nombre comercial</label>
        <input type="text" name="nombre_comercial" class="form-control" value="<?php echo $fila["nombre_comercial"]; ?>">
    </div>

    <div class="mb-3">
        <label>Razón social</label>
        <input type="text" name="razon_social" class="form-control" value="<?php echo $fila["razon_social"]; ?>">
    </div>

    <div class="mb-3">
        <label>Cif</label>
        <input type="text" name="cif" class="form-control" value="<?php echo $fila["cif"]; ?>">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" class="form-control" value="<?php echo $fila["direccion"]; ?>">
    </div>

    <div class="mb-3">
        <label>Codigo Postal</label>
        <input type="text" name="codigopostal" class="form-control" value="<?php echo $fila["codigopostal"]; ?>">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $fila["email"]; ?>">
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
