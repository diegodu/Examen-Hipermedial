<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar datos de persona </title>
</head>

<body>
    <?php
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $codigo = $_POST["codigo"];
    echo $_POST["codigo"];
    $rol = $_POST["ISBN"];
    $nombres = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;
    $apellidos = $_POST["stock"];
    $direccion = $_POST["vendidos"];
    $telefono =$_POST["precio"];
    $correo = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : null;
    $resumen = isset($_POST["resumen"]) ? trim($_POST["resumen"]) : null;
    $novedad = isset($_POST["novedad"]) ? trim($_POST["novedad"]) : null;
    $idioma = isset($_POST["idioma"]) ? trim($_POST["idioma"]) : null;
    $editorial = isset($_POST["editorial"]) ? trim($_POST["editorial"]) : null;
    $paginas =$_POST["paginas"];
    $anio = $_POST["anio"];
  
    $sql = "UPDATE libro " .
        "SET lib_isbn = $rol, " .
        "lib_titulo = '$nombres', " .
        "lib_stock = $apellidos, " .
        "lib_vendidos = $direccion, " .
        "lib_precio = $telefono, " .
        "lib_observaciones = '$correo', " .
        "lib_resumen = '$resumen', " .
        "lib_novedad = '$novedad', " .
        "lib_idioma = '$idioma', " .
        "lib_editorial = '$editorial', " .
        "lib_paginas = $paginas, " .
        "lib_anio = '$anio' " .
        "WHERE lib_codigo = $codigo";
    
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    
    $conn->close();
   header("Location: ../vista/productos_admin.php");
    ?>
</body>

</html>