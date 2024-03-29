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
    <?php
    include '../../config/conexionBD.php';
    $sql = "SELECT * FROM libro WHERE lib_codigo=" . $_GET["codigolibro"] . ";";
    $result = $conn->query($sql);
    $sqllibro = $result->fetch_assoc();
    ?>
    <section class="maincontent2 container">
        <section class="divi">
            <div class="imag">
                <figure>
                    <img src="../../imagenes/libros/<?php echo $sqllibro["img"] ?>">
                </figure>

            </div>
            <div class="informa">
                <div>
                    <h3><?php echo $sqllibro["lib_titulo"] ?></h3>

                </div>
                <div class="ess">
                    <?php
                    $sqlvalo = "SELECT lib_precio as precio FROM libro WHERE lib_codigo=" . $_GET["codigolibro"] . ";";
                    $resultvalo = $conn->query($sqlvalo);
                    $sqlva = $resultvalo->fetch_assoc();
                    ?>
                    <p class="va"><?php echo "$" . $sqlva["precio"] ?></p>
                    <div class="est">
                        <p>Editorial:</p>
                        <?php
                        $sqledi = "SELECT lib_editorial as editorial FROM libro WHERE lib_codigo=" . $_GET["codigolibro"] . ";";
                        $resultedi = $conn->query($sqledi);
                        $sqledit = $resultedi->fetch_assoc();
                        ?>
                        <p><?php echo $sqledit["editorial"] ?></p>

                    </div>
                    <?php
                    $sql = "SELECT g.gen_nombre as categoria FROM libro l, genero g WHERE g.gen_codigo = l.gen_codigo AND l.lib_codigo =" . $_GET["codigolibro"] . ";";
                    $result = $conn->query($sql);
                    $sqlcategoria = $result->fetch_assoc();

                    ?>
                    <div class="est">
                        <p>Categoria:</p>
                        <p><?php echo $sqlcategoria["categoria"] ?></p>

                    </div>
                    <?php
                    $sqlnom = "SELECT a.aut_nombre as aunombre, a.aut_apellido as auapellido FROM libro l, autor a WHERE l.aut_codigo = a.aut_codigo AND l.lib_codigo =" . $_GET["codigolibro"] . ";";
                    $resultnom = $conn->query($sqlnom);
                    $sqlnombre = $resultnom->fetch_assoc();
                    ?>
                    <div class="est">
                        <p>Autor:</p>
                        <p><?php echo $sqlnombre["aunombre"] . " " . $sqlnombre["auapellido"] ?></p>

                    </div>


                </div>
                <div class="con">
                    <?php
                    if (isset($_SESSION['isLogged'])) {
                        ?>
                        <a style="color: black" href="" onclick='agregarCarrito(<?php echo $sqllibro["lib_codigo"] ?>)'> <i class="fas fa-cart-arrow-down"></i> Agregar al Carrito</a>
                    <?php
                    } else {
                        ?>
                        <a style="color: black" href="./login.php"> <i class="fas fa-cart-arrow-down"></i> Agregar al Carrito</a>
                    <?php
                    } ?>



                </div>
                <div class="com" id="calificacionLibro">
                    <?php
                    if (isset($_SESSION["isLogged"])) {
                        $sqlcalificacion = "SELECT * FROM calificaciones c, libro l WHERE c.lib_id=" . $sqllibro["lib_codigo"] . " AND c.lib_id = l.lib_codigo AND c.cal_id_usu = " . $_SESSION["usu_codigo"] . ";";
                        $sqlcalificacion = $conn->query($sqlcalificacion);
                        ?>

                        <?php
                            if ($sqlcalificacion->num_rows > 0) {
                                ?>
                            <a><i class="fas fa-heart" onclick="darLike(this<?php echo (', ' . $sqllibro['lib_codigo']) ?>)"></i></a>
                        <?php
                            } else {
                                ?>
                            <a><i class="far fa-heart" onclick="darLike(this<?php echo (', ' . $sqllibro['lib_codigo']) ?>)"></i></a>
                        <?php
                            }
                        } else {
                            ?>
                        <a href="./login.php"><i class="fas fa-heart" ></i></a>
                    <?php
                    }

                    ?>

                    <?php
                    $sqllike = "SELECT SUM(c.cal_valor) as valor FROM libro l, calificaciones c WHERE c.lib_id = l.lib_codigo AND l.lib_codigo =" . $sqllibro["lib_codigo"] . ";";
                    $resultlike = $conn->query($sqllike);
                    $sqlcalificacion = $resultlike->fetch_assoc();
                    ?>
                    <span><?php echo $res = ($sqlcalificacion["valor"]  > 0) ? $sqlcalificacion["valor"] : 0; ?></span>
                    
                    <?php
                    if (isset($_SESSION['isLogged'])) {
                        ?>
                         <textarea placeholder="Agregar comentario" name="comentario" id="comentario"></textarea>
                    <input type="button" value="Agregar Comentario" onclick="comentar(<?php echo $sqllibro['lib_codigo'] ?>)">
                    <?php
                    } else {
                        ?>
                          <textarea placeholder="Agregar comentario" name="comentario" id="comentario"></textarea>
                           <a href="./login.php"><input type="button" value="Agregar Comentario" ></a>
                    <?php
                    } ?>

                </div>


            </div>


        </section>



    </section>

    <section class="descripcion container">
        <div class="container">
            <div>
                <h3>Resumen</h3>
                <?php
                $sqlcom = "SELECT lib_resumen as resumen FROM libro WHERE lib_codigo =" . $_GET["codigolibro"] . ";";
                $resultcom = $conn->query($sqlcom);
                $sqlcomentario = $resultcom->fetch_assoc();
                ?>
                <p><?php echo $sqlcomentario["resumen"] ?></p>
            </div>
        </div>

    </section>
    <section class="comentarios container">
        <h3 id="we">Comentarios</h3>
        <div id="comentarioslibro">
            <?php
            $sqlre = "SELECT u.usu_nombre as nombre, c.comentario as comentario FROM libro l, comentarios c, usuario u WHERE c.com_id_libro = l.lib_codigo AND c.eliminado = 'N' AND u.usu_id = c.com_id_usuario AND l.lib_codigo =" . $_GET["codigolibro"] . ";";
            $resultre = $conn->query($sqlre);
            if ($result->num_rows > 0) {

                while ($row = $resultre->fetch_assoc()) {
                    ?>
                    <div class="container">

                        <div>
                            <h3><?php echo $row["nombre"] ?></h3>
                            <p><?php echo $row["comentario"] ?></p>

                        </div>

                    </div>


            <?php

                }
            } else {
                echo "<h2> No hay comentarios </h2>";
            }
            $conn->close();
            ?>

        </div>

    </section>
    <div id="NotificaCarrito">

        <script>
            let not = document.querySelector('.notificacion')
            if (typeof not !== 'undefined') {
                setTimeout(() => {
                    not.remove();
                }, 3000);
            }
        </script>
    </div>
    <?php include "include/footer.php" ?>

    <script src="../js/funciones.js"></script>

</body>

</html>