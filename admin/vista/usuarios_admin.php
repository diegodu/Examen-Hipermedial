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
      
        <h1>Usuarios Registrados</h1>
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

<table style="width:80% ; margin-left: 10%; ">
     
        <?php
        include '../../config/conexionBD.php';

        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                /*echo "<img src='../../imagenes/christian/usuario.png' class='name' >" ;*/
                
                echo "<tr style=' text-align: center;  background: linear-gradient(to bottom, 
                rgb(207, 223, 226), 
                rgb(112, 183, 224), 
                rgb(95, 114, 226));' >";


                echo " <td style='width: 150px; margin-top: 15px; padding: 15px;'> "
                ."<img src='../../imagenes/christian/usuario.png' style=' height: 30%;' >"."</td>" ;
                /*echo " <td>" . "<img src='../../imagenes/christian/usuario.png' class='h'>" . "</td>";*/
                echo " <td style='  margin-top: 15px; padding: 15px;' > ".
                        
                        "<h5 >Correo electronico :</h5>"
                        ."<h3 >". $row["usu_correo"] ."</h3>"
                        ."<h5 >Contraseña :</h5>"
                        ."<h3>". $row["usu_contrasenia"] ."</h3>".
                        "<h3> <a class='estilo' href='contrasenia_usu.php?codigo=" . $row['usu_id'] . "'>Cambiar contraseña</a> </h3>". "</td>";
                echo " <td style='  margin-top: 15px; padding: 15px;'>" 
                ."<h5 >Cedula :</h5>"
                ."<h3>". $row["usu_cedula"] ."</h3>"
                ."<h5 >Nombre :</h5>"
                ."<h3>".$row['usu_nombre'] ."</h3>" 
                ."<h5 >Apellido :</h5>"
                ."<h3>". $row['usu_apellido'] ."</h3>".
                "</td>";
                
                echo " <td style='  margin-top: 15px; padding: 15px;'>" .
                "<h5 >Telefono :</h5>".
                "<h3>".$row['usu_telefono'] ."</h3>".
                "<h5 >Direccion :</h5>"
                ."<h3>".$row['usu_direccion'] ."</h3>". 
                "<h5 >Eliminado :</h5>"
                ."<h3>". $row["usu_eliminado"] ."</h3>". "</td>";

                echo " <td style='  margin-top: 15px; padding: 15px;'> ".
                "<h5 > </h5>".
                "<button>"."<a class='estilo' href='eliminar_usu.php?codigo=".$row['usu_id'] . "'>Eliminar Usuario</a>" ."</button>".
                "<h5 >.</h5>".
                "<button>"."<a class='estilo' href='modificar_usu.php?codigo=" . $row['usu_id'] . "'>Modificar Usuario</a>"."</button>". 
                " </td>";
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