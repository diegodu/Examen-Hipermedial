<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Eliminar </title>
</head>

<body>
    <?php
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $codigo = $_GET["eli_factura"];

    //Si voy a eliminar físicamente el registro de la tabla
    //$sql = "DELETE FROM usuario WHERE codigo = '$codigo'";

    $sql = "UPDATE facturacabecera SET fac_eliminado = 'S' WHERE fac_ca_id = $codigo";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Se ha eliminado los datos correctamemte!!!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }
    header("Location: ../vista/factura.php");
    $conn->close();
    ?>
</body>

</html>