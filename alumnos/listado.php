<?php
$ruta = "../";
include("../includes/sesion.php");
include("../includes/db.php");

$sql= "SELECT * FROM alumnos ORDER BY id ASC";
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
                    <h3 class="mb-0">Alumnos</h3>
                </div>
                <div class="col-sm-6 text-end">
                    <a href="nuevo.php" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Nuevo alumno
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
                        Listado de alumnos
                    </h3>
                </div>
                <div class="card-body">
                    <!--Aqui ira la tabla--->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Foto</th>
                                <th>CV</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fila=$resultado->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo $fila["nombre"]; ?></td>
                                <td><?php echo $fila["apellidos"]; ?></td>
                                <td><?php if($fila["foto"]!=""){echo "Sí";}else{echo "No";} ?></td>
                                <td><?php if($fila["cv"]!=""){echo "Sí";}else{echo "No";} ?></td>
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
                title:"Usuario creado",
                text: "El usuario se ha creado correctamente."
            });
        }

        if(mensaje=="actualizado"){
            Swal.fire({
                icon:"success",
                title:"Usuario actualizado",
                text: "El usuario se ha actualizado correctamente."
            });
        }

        if(mensaje=="eliminado"){
            Swal.fire({
                icon:"success",
                title:"Usuario eliminado",
                text: "El usuario se ha eliminado correctamente."
            });
        }

    </script>

    <?php } ?>
</body>
</html>