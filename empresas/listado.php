<?php
$ruta = "../";
include("../includes/sesion.php");
include("../includes/db.php");

$sql= "SELECT * FROM empresas ORDER BY id ASC";
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
                    <h3 class="mb-0">Empresas</h3>
                </div>
                <div class="col-sm-6 text-end">
                    <a href="nuevo.php" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Nueva empresa
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
                                <th>Nombre comercial</th>
                                <th>Razón social</th>
                                <th>CIF</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fila=$resultado->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo $fila["nombre_comercial"]; ?></td>
                                <td><?php echo $fila["razon_social"]; ?></td>
                                <td><?php echo $fila["cif"]; ?></td>
                                <td><?php echo $fila["email"]; ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $fila["id"]; ?>" class="btn btn-warning btn-sm" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="eliminar(<?php echo $fila['id']; ?>)">
                                        <i class="bi bi-trash"></i>
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
    <script>
function eliminar(id){
    Swal.fire({ //ESto crea la ventana
        title:'¿Eliminar usuario?',
        text: "Una vez eliminado, no se podra recuperar!",
        icon: 'warning',

        showCancelButton: true,

        confirmCancelcolor: '#d33',
        cancelButtonColor: '#6c757d',

        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result)=>{//Esto espera que el usuario presione el boton.
        if(result.isConfirmed){//si presiona si entra aqui.
            window.location = "borrar.php?id=" + id;
        }
    })
}
    </script>
    <?php if(isset($_GET["mensaje"])) {?>

    <script>
        let mensaje = "<?php echo $_GET["mensaje"]; ?>"

        if(mensaje=="insertado"){
            Swal.fire({
                icon:"success",
                title:"Empresa creada",
                text: "La empresa se ha creado correctamente."
            });
        }

        if(mensaje=="actualizado"){
            Swal.fire({
                icon:"success",
                title:"Empresa actualizada",
                text: "La empresa se ha actualizado correctamente."
            });
        }

        if(mensaje=="eliminado"){
            Swal.fire({
                icon:"success",
                title:"Empresa eliminada",
                text: "La empresa se ha eliminado correctamente."
            });
        }

    </script>

    <?php } ?>
</body>
</html>