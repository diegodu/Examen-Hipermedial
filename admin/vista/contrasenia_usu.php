<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Inicio Administrador</title>
</head>

<body>
    <header>
    
        <h1>Cambiar Contrasenia</h1>
      

    </header>
    
<!-------------------------------------------------------------->
<h2>Modificar</h2>
<section>
    <?php
    $codigo = $_GET["codigo"];
    //echo "aqui esta el codgo:  $codigo";
    $sql = "SELECT * FROM usuario where usu_id=$codigo";
    include '../../config/conexionBD.php';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <section >
            <form id="formulario01" method="POST" action="../controlador/contrasenia.php ">

                <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
               
                <label for="nombres">Nombres (*)</label>
                <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombre"];
                                                                                ?>" required placeholder="Ingrese los dos nombres ..."  disabled/>
                <br>
                <label for="apellidos">Apelidos (*)</label>
                <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellido"];
                                                                                    ?>" required placeholder="Ingrese los dos apellidos ..."  disabled/>
                <br>
                
                <label for="correo">Contraseña (*)</label>
                <input type="text" id="contrasenia" name="contrasenia" value="<?php echo $row["usu_contrasenia"]; ?>" required placeholder="Ingrese la contraseña ..." />
                <br>

                <button><input type="submit" id="modificar" name="modificar" value="Modificar" /></button>
                
            </form>
            <button class="formul"><a href="usuarios_admin.php" class="estilose"> Cancelar</a></button>
            </section>
            
    <?php
        }
    } else {
        echo "<p>Ha ocurrido un error inesperado !</p>";
        echo "<p>" . mysqli_error($conn) . "</p>";
    }
    $conn->close();
    ?>
    </section>









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