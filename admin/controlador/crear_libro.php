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
    
     /********************************* */
     $foto = $_FILES['imagen']['name'];
$temp = $_FILES['imagen']['tmp_name'];
$type = $_FILES['imagen']['type'];


echo ($_FILES['imagen']['name']);

$sql1 = "SELECT MAX(lib_codigo)+1 AS co  FROM libro";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
echo $row1['co'];


move_uploaded_file($temp, "../../imagenes/Libros/$foto");


     /********************************** */

    $autor = $_POST["autor"];
    $categoria = $_POST["categoria"];
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

    /********************************** */


  
 
    $sql = "INSERT INTO  libro VALUES (null,$autor,$categoria,$ISBN,'$titulo',$stock,0,$precio,'$observaciones','$resumen','$novedad','$idioma','$editorial',$paginas,'$anio','" . $_FILES['imagen']['name'] . "' ) "; 
  
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    
    
   
    $conn->close();
    ?>
</body>

</html>