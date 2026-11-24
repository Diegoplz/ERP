<?php
$ruta="../";
include("../includes/sesion.php");
?>

<!doctype html>
<html lang="es">

<?php include("../includes/head.php"); ?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper"> 
    <?php include("../includes/header.php"); ?> 
    <?php include("../includes/sidebar.php"); ?>

    <main class="app-main">      
        <form action="insertar.php" method="POST">

    <div class="mb-3">
        <label>Nombre comercial</label>
        <input type="text" name="nombre_comercial" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Razón social</label>
        <input type="text" name="razon_social" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Cif</label>
        <input type="text" name="cif" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" class="form-control">
    </div>

    <div class="mb-3">
        <label>Código Postal</label>
        <input type="text" name="codigopostal" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
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