

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar </title>
</head>

<body>
    <?php
    echo " entro a modificacion";
    $encamino=$_GET['encamino'];
    echo $encamino;
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $sql = "UPDATE facturacabecera " .
        "SET fac_estado = 'E' " .
        "WHERE fac_ca_id =  $encamino";
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    
    $conn->close();
   header("Location: ../vista/factura.php");
    ?>
</body>

</html>