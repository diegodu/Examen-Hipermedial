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
    
        <h1>Modificar Usuario</h1>
      

    </header>
    
<!-------------------------------------------------------------->
<h2>Modificar</h2>
<section>
    <?php
    $codigo = $_GET["codigo"];
    echo "aqui esta el codgo:  $codigo";
    $sql = "SELECT * FROM usuario where usu_id=$codigo";
    include '../../config/conexionBD.php';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <section >
            <form id="formulario01" method="POST" action="../controlador/modificar.php ">

                <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
                <label for="rol">Rol (*)</label>
                <input type="text" id="rol" name="rol" value="<?php echo $row["usu_rol"]; ?>" required placeholder="Ingreseun Rol ..." />
                <br>
                <label for="nombres">Nombres (*)</label>
                <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombre"];
                                                                                ?>" required placeholder="Ingrese los dos nombres ..." />
                <br>
                <label for="apellidos">Apelidos (*)</label>
                <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellido"];
                                                                                    ?>" required placeholder="Ingrese los dos apellidos ..." />
                <br>
                <label for="direccion">Dirección (*)</label>
                <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
                                                                                    ?>" required placeholder="Ingrese la dirección ..." />
                <br>
                <label for="telefono">Teléfono (*)</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
                                                                                ?>" required placeholder="Ingrese el teléfono ..." />
                <br>
           
                <label for="correo">Correo electrónico (*)</label>
                <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>" required placeholder="Ingrese el correo electrónico ..." />
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


<!------------------php---------------------------->

<?php


?>












<!-------------------------------------------------------------->


    <section class="information">
        <div class="container">
            <div>
                <h3>Obten los mejores libros</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi non explicabo quia voluptas eos
                    repellat. Eos quasi, reprehenderit dignissimos harum minus impedit veritatis voluptatibus,
                    distinctio doloribus repellendus consequuntur a dicta.</p>
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>


    <footer>
        <div class="contact container">
            <div id="map">
                    
            </div>
            <div class="redes">
                <div>
                        <h3>Contactos</h3>
                        <p>Cuenca-Ecuador </p>
                        <a href="https://www.ups.edu.ec/">Universida Politecnica Salesiana</a>
                        
                        <p>Telefono <a href="tel:+0999287912">0999287912</a></p>
                        
                        <p>E-mail <a href="mailto:dduchimazad@est.ups.edu.ec">dduchimazad@est.ups.edu.ec</a></p>
                        

                </div>
                <div>
                        <h3>Siguenos</h3>
                        <p>Siguenos en nuestras redes sociales</p>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter-square"></i>

                </div>
                   
                    

            </div>

        </div>

        <div class="about container">
            <div class="info">
                <h3>Informacion</h3>
                <p>Quienes somos</p>
                <p>Mision</p>
                <p>Vision</p>
                <p>Contactos</p>


            </div>
            <div class="libro">
                    <h3>Libros</h3>
                    <p>Matematicas</p>
                    <p>Ciencias Naturales</p>
                    <p>Estudios sociales</p>
                    <p>Literartura</p>

            </div>
            <div class="integrantes">
                    <h3>Integrantes</h3>
                    <p>Daniel Guzman</p>
                    <p>Christian Rivera</p>
                    <p>Diego Duchimaza</p>
                    <p>Pablo Malla</p>

            </div>
            

        </div>
        <div class="target">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
        </div>

    </footer>
</body>

</html>