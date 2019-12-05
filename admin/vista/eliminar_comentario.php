<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Inicio Administrador</title>
</head>

<body>
    <header>
    
        <h1>Eliminar Comentario</h1>
      

    </header>
    
<!-------------------------------------------------------------->
<h2>Eliminar</h2>

<!------------------php---------------------------->

<?php

$codigo = $_GET["comentario"];
$sql = "SELECT * FROM comentarios where com_id=$codigo";

include '../../config/conexionBD.php';
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        ?>
        <form id="formulario01" method="POST" action="../controlador/eliminar_comentario.php">
        
            <label for="comentario">Id del comentario (*)</label>
            <input type="text" id="comentario" name="comentario" value="<?php echo $row["com_id"];?>"  />
            <br>

           <button> <input type="submit" id="eliminar" name="eliminar" value="Eliminar" /></button>
           <button class="formul"><a href="modificar_libro.php"> Cancelar</a></button>
           
        </form>
<?php
    }
} else {
    echo "<p>Ha ocurrido un error inesperado !</p>";
    echo "<p>" . mysqli_error($conn) . "</p>";
}
$conn->close();
?>



</body>

</html>