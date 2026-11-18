<?php
$ruta = "../";
include("../includes/sesion.php");
include("../includes/db.php");

$sql= "SELECT * FROM usuarios ORDER BY id ASC";
$resultado= $conexion->query($sql);
?>

<!doctype html>
<html lang="es">
<?php include("../includes/head.php"); ?>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/sidebar.php"); ?>
    <main class="app-main">
      <!--Aqui va el listado---> 
      <!---Cabecera-->
      <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class=col-sm-6>
                    <h3 class="mb-0">Usuarios</h3>
                </div>
                <div class="col-sm-6 text-end">
                    <a href="nuevo.php" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Nuevo usuario
                    </a>
                </div>
            </div>
        </div>
      </div>
      <!---Contenido---->
      <div class="app-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Listado de usuarios
                    </h3>
                </div>
                <div class="card-body">
                    <!--Aqui ira la tabla--->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuarios</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fila=$resultado->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo $fila["usuario"]; ?></td>
                                <td><?php echo $fila["email"]; ?></td>
                                <td><?php echo $fila["role"]; ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Editar
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </main> 
    <?php include("../includes/footer.php"); ?> 
  </div>
    <?php include("../includes/scripts.php"); ?>
</body>
</html>