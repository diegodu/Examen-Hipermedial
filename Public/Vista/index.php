<?php
session_start();

if (isset($_SESSION['isLogged'])) {
    if ($_SESSION['usu_rol'] == 'admin') {
        header("Location: ../../admin/vista/index_admin.html");
    }
}

?>
<!DOCTYPE html>


<html lang="es">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>
    <?php include "include/header.php" ?>

    <section class="menuFondo">
        <div class="menuInformacion">
            <h2>Obten los mejores libros! Compra ya!</h2>
            <p>Grandes descuentos por la compra de tu libro no lo pienses mas y ordena de inmediato</p>
        </div>

    </section>
    <section class="maincontent container" id="contenedor-libros">

        <h2>ULTIMOS LIBROS AGREGADOS</h2>
        <?php
        include '../../config/conexionBD.php';

        $sql = "SELECT * FROM libro ORDER BY 1 DESC limit 16;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card">
                    <figure>
                        <a href="../../Public/Vista/producto.php?codigolibro=<?php echo $row["lib_codigo"] ?>"> <img src="../../imagenes/libros/<?php echo $row["img"] ?>"></a>
                    </figure>
                    <a href="../../Public/Vista/producto.php?codigolibro=<?php echo $row["lib_codigo"] ?>">
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
                <p>Nuestra actividad está vinculada al libro, solo nos debemos a nuestros lectores. Nuestra única meta es
                    el libro. Creemos que no siempre ser másgrande es ser mejor, y no siempre hay que crecer para tener
                    futuro.</p>
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>
    <?php include "include/footer.php" ?>
</body>

</html>