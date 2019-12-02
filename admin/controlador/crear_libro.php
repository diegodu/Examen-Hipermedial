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
    $imagen = addslashes(file_get_contents($_FILES["imagen"]['tmp_name']));


    $sql = "INSERT INTO  libro VALUES (0,1,1,$ISBN,'$titulo',$stock,$precio,'$observaciones','$resumen','$novedad','$idioma','$editorial',$paginas,'$anio','$imagen'  ) "; 
  
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    
    
    header("Location: ../vista/productos_admin.php");
    $conn->close();
    ?>
</body>

</html>