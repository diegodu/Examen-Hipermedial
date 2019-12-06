<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar datos de Usuario </title>
</head>

<body>
    <?php
    session_start();
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $codigo = $_SESSION["usu_codigo"];
    $nombres = isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8') : null;
    $apellidos = isset($_POST["apellido"]) ? mb_strtoupper(trim($_POST["apellido"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : null;
    $fechaNacimiento = isset($_POST["fechanac"]) ? trim($_POST["fechanac"]) : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    date_default_timezone_set("America/Guayaquil");
    $fecha = date('Y-m-d H:i:s', time());
    $sql = "UPDATE usuario " .
        "SET usu_nombre = '$nombres', " .
        "usu_apellido = '$apellidos', " .
        "usu_direccion = '$direccion', " .
        "usu_telefono = '$telefono', " .
        "usu_correo = '$correo', " .
        "usu_contrasenia = '$contrasena', " .
        "usu_fecha_modificacion = '$fecha' " .
        "WHERE usu_id = $codigo";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
        header("Location: ../../Public/Vista/index.php");
    $conn->close();
    ?>
</body>

</html>