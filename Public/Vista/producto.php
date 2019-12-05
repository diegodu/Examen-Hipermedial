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
                    <p class="va">$20</p>
                    <div class="est">
                        <p>Estado:</p>
                        <p>Disponible</p>

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
                             <a style="color: black" href=""> <i class="fas fa-cart-arrow-down"></i> Agregar al Carrito</a>
                             <?php 
                        }else{
                            ?>
                            <a style="color: black" href="./login.php"> <i class="fas fa-cart-arrow-down"></i> Agregar al Carrito</a>
                            <?php
                        } ?>
                   
                    
                   
                </div>
                <div class="com">
                    <a onclick="darLike(this)"><i class="far fa-heart"></i></a>
                    

                    <?php
                    $sqllike = "SELECT SUM(c.cal_valor) as valor FROM libro l, calificaciones c WHERE c.lib_id = l.lib_codigo AND l.lib_codigo =" . $_GET["codigolibro"] . ";";
                    $resultlike = $conn->query($sqllike);
                    $sqlcalificacion = $resultlike->fetch_assoc();

                    ?>
                    <span id="valorlike"><?php echo  $sqlcalificacion["valor"] ?></span>
                    <input type="text" placeholder="Agregar comentario" name="comentario" id="comentario">
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
        <h3>Comentarios</h3>
        <?php
        $sqlre = "SELECT u.usu_nombre as nombre, c.comentario as comentario FROM libro l, comentarios c, usuario u WHERE c.com_id_libro = l.lib_codigo AND u.usu_id = c.com_id_usuario AND l.lib_codigo =" . $_GET["codigolibro"] . ";";
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
            echo "<h2> No hay Libros </h2>";
        }
        $conn->close();
        ?>

    </section>
   <div id="NotificaCarrito">
   <div style="background-color: greenyellow; width: 300px; padding: 15px; position: fixed; bottom: 25px; right: 25px ; text-align: center; display: none;" >
       <p> Agregador al Carrito</p>
    </div>
   </div>
    <?php include "include/footer.php" ?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
   
>>>>>>> cambios
    <script src="../js/funciones.js"></script>
=======
   
    
>>>>>>> js
</body>

</html>