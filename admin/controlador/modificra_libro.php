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
    $ISBN = $_POST["ISBN"];
    $titulo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;
    $stock = $_POST["stock"];
    $precio = $_POST["precio"];
    $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : null;
    $resumen = isset($_POST["resumen"]) ? trim($_POST["resumen"]) : null;
    $novedad = isset($_POST["novedad"]) ? trim($_POST["novedad"]) : null;
    $idioma = isset($_POST["idioma"]) ? mb_strtoupper(trim($_POST["idioma"]), 'UTF-8') : null;
    $editorial = isset($_POST["editorial"]) ? mb_strtoupper(trim($_POST["editorial"]), 'UTF-8') : null;
    $paginas = $_POST["paginas"];
    $anio = isset($_POST["anio"]) ? trim($_POST["anio"]) : null;
  
    $sql = "UPDATE libro " .
        "SET lib_isbn = $ISBN, " .
        "lib_titulo = '$titulo', " .
        "lib_stock = $stock, " .
        "lib_precio = $precio, " .
        "lib_observaciones = '$observaciones', " .
        "lib_resumen = '$resumen', " .
        "lib_novedad = '$novedad', " .
        "lib_idioma = '$idioma', " .
        "lib_editorial = '$editorial', " .
        "lib_paginas = $paginas, " .
        "lib_anio = '$anio' " .
        "WHERE lib_codigo = $codigo;";
    
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