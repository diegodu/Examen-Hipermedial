<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Categorias</title>
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
                <li><a href="../Vista/categoria.html">Categorias</a>
                </li>
                <li><a href="../Vista/quiens.html">Quienes somos</a>
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
    <section class="gener">
        <?php include 'include/menucategoria.php' ?>
        <div id="categorias-lista">
            <section class="cat container" id="dcategoria">
                <section class="information">
                    <div class="info_cat">
                        <div>
                            <h3>Ciencia y tecnologia</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi non explicabo quia voluptas
                                eos
                                repellat. Eos quasi, reprehenderit dignissimos harum minus impedit veritatis voluptatibus,
                                distinctio doloribus repellendus consequuntur a dicta.</p>
                        </div>

                    </div>

                </section>


                <section class="maincontent container">
                    <h2>LIBROS</h2>
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
            </section>
        </div>
    </section>



    <?php include "include/footer.php"?>
    <script src="../js/funciones.js"></script>
</body>

</html>