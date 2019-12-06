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
    
        <h1>Eliminar Usuario</h1>
      

    </header>
    
<!-------------------------------------------------------------->
<h2>Eliminar</h2>

<!------------------php---------------------------->

<?php

$codigo = $_GET["codigo"];
$sql = "SELECT * FROM usuario where usu_id=$codigo";

include '../../config/conexionBD.php';
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        ?>
        <form id="formulario01" method="POST" action="../controlador/eliminar.php">
            <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
          
            <br>
            <label for="nombres">Nombres (*)</label>
            <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombre"];
                                                                            ?>" disabled />
            <br>
            <label for="apellidos">Apelidos (*)</label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellido"];
                                                                                ?>" disabled />
            <br>
            <label for="direccion">Dirección (*)</label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
                                                                                ?>" disabled />
            <br>
            <label for="telefono">Teléfono (*)</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
                                                                            ?>" disabled />
            <br>
          
            <label for="correo">Correo electrónico (*)</label>
            <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>" disabled />
            <br>

            <label for="correo">Contraseña (*)</label>
            <input type="text" id="contrasenia" name="contrasenia" value="<?php echo $row["usu_contrasenia"]; ?>" disabled />
            <br>

           <button> <input type="submit" id="eliminar" name="eliminar" value="Eliminar" /></button>
           <button class="formul"><a href="usuarios_admin.php"> Cancelar</a></button>
           
        </form>
<?php
    }
} else {
    echo "<p>Ha ocurrido un error inesperado !</p>";
    echo "<p>" . mysqli_error($conn) . "</p>";
}
$conn->close();
?>










<!-------------------------------------------------------------->


    <section class="information">
        <div class="container">
            <div>
                <h3>Libreria Virtual</h3>
               
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>


  
</body>

</html>