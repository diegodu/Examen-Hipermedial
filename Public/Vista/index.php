<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>
    <header>
        <div class="bar-login">
            <div class="btns container">
                <a href="../Vista/login.html"><i class="fas fa-cart-arrow-down"></i></a>
                <a href="../Vista/login.html"><i class="fas fa-sign-in-alt"></i> Iniciar sesion</a>
                <a href="../Vista/crear_usuario.html"><i class="fas fa-user"></i> Registro</a>
            </div>
        </div>
        <h1>LIBRERIA</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="../Vista/index.php">Inicio</a></li>
                <li><a href="../Vista/cat_seleccionada.php">Categorias</a>
                </li>
                <li><a href="./quiens.html">Quienes somos</a>
                </li>
                <li><a href="#contactos">Contactos</a></li>
                <li>
                    <div class="search-content">
                        <input type="search" name="" id="" placeholder="Buscar">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
            </ul>
        </nav>

    </header>
    <section class="menuFondo">
        <div class="menuInformacion">
            <h2>Obten los mejores libros! Compra ya!</h2>
            <p>Grandes descuentos por la compra de tu libro no lo pienses mas y ordena de inmediato</p>
        </div>
        
    </section>
    <section class="maincontent container">

        <h2>LIBROS DESTACADOS</h2>
        <?php
        include '../../config/conexionBD.php';

        $sql = "SELECT * FROM libro ORDER BY 1 DESC limit 16;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card">
                    <figure>
                        <a href="#"> <img src="../../imagenes/libros/<?php echo $row["img"] ?>"></a>
                    </figure>
                    <a href="#">
                        <h3><?php echo $row["lib_titulo"] ?></h3>
                    </a>
                    <?php
                            $sqlGenero = "SELECT * FROM genero where gen_codigo=" . $row["gen_codigo"] . ";";
                            $sqlGenero = $conn->query($sqlGenero);
                            $sqlGenero = $sqlGenero->fetch_assoc();

                            ?>
                    <p><?php echo $sqlGenero["gen_nombre"] ?></p>
                    <p>$<?php echo $row["lib_precio"] ?></p>
                </div>
                
        <?php

            }
        } else {
            echo "<h2> No hay Libros </h2>";
        }
        $conn->close();
        ?>




    </section>

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
            <div  id="contactos" class="redes">
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
                <p>Christian Rivera</p>
                <p>Diego Duchimaza</p>
                <p>Pablo Malla</p>

            </div>


        </div>
        <div class="target">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-amex"></i>
            <i class="fas fa-theater-masks"></i>
        </div>

    </footer>
</body>

</html>