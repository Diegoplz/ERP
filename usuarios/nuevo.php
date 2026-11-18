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
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Rol</label>

        <select name="role" class="form-select">

            <option value="Administrador">Administrador</option>
            <option value="Empresa">Empresa</option>
            <option value="Alumno">Alumno</option>

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