
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar </title>
</head>

<body>
    <?php
    echo " entro a modificacion";
    $rechazado=$_GET['rechazado'];
    echo $rechazado;
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $sql = "UPDATE facturacabecera " .
        "SET fac_estado = 'R' " .
        "WHERE fac_ca_id =  $rechazado";
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