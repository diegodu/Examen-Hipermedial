<?php 

    session_start();
    if (isset($_SESSION['isLogged'])) {
        if ($_SESSION['usu_rol'] == 'admin') {
            header("Location: ../../admin/vista/index_admin.html");
        }

    }
           
?>
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
<?php include "include/header.php"?>
    <section class="gener">
        <?php include 'include/menucategoria.php' ?>
        <div id="categorias-lista">
            <section class="cat container" id="dcategoria">
                <section class="information">
                    <div class="info_cat">
                        <div>
                            <h3>Libreria</h3>
                            <p>En esta seccion se muestran todos los libros agregados, de la misma forma, se puede
                                seleccionar una categoria en especifico y revisar su contenido y descripcion.
                            </p>
                        </div>

                    </div>

                </section>


                <section class="maincontent container">
                    <h2>LIBROS</h2>
                    <?php
                    include '../../config/conexionBD.php';

                    $sql = "SELECT * FROM libro ;";
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