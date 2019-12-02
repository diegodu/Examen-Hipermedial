<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cambiar contraseña </title>
</head>

<body>
    <?php
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $codigo = $_POST["codigo"];
    $contra = $_POST["contrasenia"];

    //Si voy a eliminar físicamente el registro de la tabla
    //$sql = "DELETE FROM usuario WHERE codigo = '$codigo'";
    date_default_timezone_set("America/Guayaquil");
    $fecha = date('Y-m-d H:i:s', time());
    $sql = "UPDATE usuario SET usu_contrasenia = '$contra', usu_fecha_modificacion = '$fecha' WHERE
usu_id = $codigo";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Se ha eliminado los datos correctamemte!!!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }
    header("Location: ../vista/usuarios_admin.php");
    $conn->close();
    ?>
</body>

</html>