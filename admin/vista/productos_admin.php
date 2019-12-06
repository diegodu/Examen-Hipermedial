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
        
        <h1>Productos</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="index_admin.html">Inicio</a></li>
                <li><a href="usuarios_admin.php">Clientes</a></li>
                <li><a href="productos_admin.php" style="text-decoration-color: rgb(52, 122, 226);">Productos</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="factura.php">Facturas</a></li>
                <li><a href="crear_libro.php">Agregar Libro</a></li>
                <li><a href="crear_autor.php">Agregar Autor</a></li>
             
            </ul>
        </nav>

    </header>

<!------------------php---------------------------->

    <section class="maincontent container">
        <h2>Productos</h2>
        <?php
        include '../../config/conexionBD.php';
 
        $sql = "SELECT * FROM libro, genero WHERE libro.gen_codigo=genero.gen_codigo";
        $result = $conn->query($sql);



        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
           
                ?>
        <div class="card">
            <figure>
              
             
          <img src='../../imagenes/Libros/<?php echo $row["img"] ?>'/>
            
            </figure>
            
                <h3><?php echo $row["lib_titulo"] ?></h3>
            
            <p><?php echo $row["gen_nombre"] ?></p>
            <p><?php echo $row["lib_precio"] ?></p>
            <h3> <a class='estilo' href='modificar_libro.php?libr=" <?php echo $row["lib_codigo"] ?> "'>Modificar Libro</a> </h3></td>;
        </div>
        <?php 
            
                
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
            echo "</tr>";
        }



        $conn->close();
        ?>
    </section>



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