<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>

    <?php 
        session_start();
        $codigo = $_SESSION["usu_codigo"];
    ?>

    <section id="contenido">
        <form id="formulario01" method="POST" action="../../admin/controlador/modificar_usuario.php">
            <h2 style="text-align: center; color: white;">Modificar</h2>

            <div class="ubicarIco">
                <i class="far fa-user"></i>
                <input type="text" name="nombre" value="<?php echo ($_SESSION['usu_nombre'] )?>" id="nombre">
            </div>
            <div class="ubicarIco">
                <i class="far fa-user"></i>
                <input type="text" name="apellido" value="<?php echo ($_SESSION['usu_apellido'] )?>"  id="apellido">
            </div>
            <div class="ubicarIco">
                <i class="fas fa-map-marked-alt"></i>
                <input type="text" name="direccion" value="<?php echo ($_SESSION['usu_direccion'] )?>"  id="direccion">
            </div>
            <div class="ubicarIco">
                <i class="fas fa-mobile-alt"></i>
                <input type="text" name="telefono" value="<?php echo ($_SESSION['usu_telefono'] )?>"  id="telefono">
            </div>
            <div class="ubicarIco">
                <i class="far fa-envelope"></i>
                <input type="text" name="correo" value="<?php echo ($_SESSION['usu_correo'] )?>" id="correo">
            </div>
            <div class="ubicarIco">
                <i class="fas fa-user-lock"></i>
                <input type="text"  value="<?php echo ($_SESSION['usu_contrasenia'] )?>" name="contrasena" id="contrasena">
            </div>
            <input type="submit" value="Modificar" id="boton">
        </form>
    </section>
    <?php include "include/footer.php"?>

</body>

</html>