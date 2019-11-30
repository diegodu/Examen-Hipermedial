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
        <div class="bar-login">
            <div class="btns container">
                <a href="#"><i class="fas fa-sign-in-alt"></i> Iniciar sesion</a>
                <a href="#"><i class="fas fa-user"></i> Registro</a>
            </div>
        </div>
        <h1>LIBRERIA</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="index_admin.html">Inicio</a></li>
                <li><a href="usuarios_admin.php"  >Clientes</a></li>
                <li><a href="productos_admin.php">Productos</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Facturas</a></li>
             
            </ul>
        </nav>

    </header>
    
<!-------------------------------------------------------------->
<h2>Usuarios</h2>

<table style="width:80%">
     
        <?php
        include '../../config/conexionBD.php';

        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                /*echo "<img src='../../imagenes/christian/usuario.png' class='name' >" ;*/

                echo "<tr>";
                /*echo " <td>" . "<img src='../../imagenes/christian/usuario.png' class='h'>" . "</td>";*/
                echo " <td> "."<img src='../../imagenes/christian/usuario.png' class='name' >".
                        
                        "<h5 >Correo electronico</h5>"
                        ."<h3 >". $row["usu_correo"] ."</h3>"
                        ."<h5 >Contraseña</h5>"
                        ."<h3>". $row["usu_contrasenia"] ."</h3>"
                        ."<h5 >Cedula</h5>"
                        ."<h3>". $row["usu_cedula"] ."</h3>";
                        
                echo "</td>";
                echo " <td>" 
                ."<h5 >Nombre</h5>"
                ."<h3>".$row['usu_nombre'] ."</h3>"
                ."<h5 >Cedula</h5>"
                . $row['usu_apellido'] .
                "</td>";
                echo " <td>" . $row['usu_direccion'] . "</td>";
                echo " <td>" . $row['usu_telefono'] . "</td>";
                echo " <td>" . $row["usu_eliminado"] . "</td>";
                echo " <td> <a href='eliminar.php?codigo=" . $row['usu_id'] . "'>Eliminar</a> </td>";
                echo " <td> <a href='modificar.php?codigo=" . $row['usu_id'] . "'>Modificar</a> </td>";
                /*echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_id'] . "'>Cambiarcontraseña</a> </td>";*/
             
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
            echo "</tr>";
        }



        $conn->close();
        ?>
    </table>

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