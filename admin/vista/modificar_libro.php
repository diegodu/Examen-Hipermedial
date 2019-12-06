<!DOCTYPE html>
<html lang="es>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Inicio</title>
</head>

<body>
    <header>
        <div class="bar-login">
            <div class="btns container">
               
                <a href="productos_admin.php"><i class="fas fa-sign-in-alt"></i> Regresar</a>
               
            </div>
        </div>
        <h1>LIBRO</h1>

    </header>

    <section class="maincontent2 container">
        <section class="divi">
                <!------------------------------------------------->
                <?php
            
            include '../../config/conexionBD.php';
            $codigo = $_GET["libr"];
            $sql = "SELECT * FROM libro, genero WHERE libro.gen_codigo=genero.gen_codigo and libro.lib_codigo = $codigo";
            $result = $conn->query($sql);
           // echo "aqui esta el codigo:  $codigo";
           

            if ($result->num_rows > 0) {

            $row = $result->fetch_assoc()
                    ?>

            <div class="imag">
                <figure>
                   <img src='../../imagenes/Libros/<?php echo $row["img"] ?>'/>
                </figure>

            </div>
            <div class="informa">
                <div>
     

                    <h3><?php echo $row["lib_titulo"] ?></h3>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>

                </div>
                <div class="ess">
                    <p class="va"><?php echo $row["lib_precio"] ?></p>
                    <div class="est">
                        <h5>Stock:  </h5>
                        <br>
                        <p><?php echo $row["lib_stock"] ?></p>

                    </div>
                    <div class="est">
                        <h5>Categoria: </h5>
                        <br>
                        <p><?php echo $row["gen_nombre"] ?></p>

                    </div>
                    <div class="est">
                        <h5>Valor envio:  </h5>
                        <p>Gratis</p>

                    </div>
                    <div class="est">
                        <h5>Editorial:  </h5>
                        <p><?php echo $row["lib_editorial"] ?></p>

                    </div>
                    <div class="est">
                        <h5>Numero de paginas:  </h5>
                        <p><?php echo $row["lib_paginas"] ?></p>

                    </div>



                    <button> <a class='estilo' href='datos_libro.php?dat=" <?php echo $row["lib_codigo"] ?> "'>Modificar datos del libro</a> </button>

       

                <!------------------------------------------------->
                


            </div>


        </section>



    </section>

    <section class="descripcion container">
        <div class="container">
            <div>
                <h3>Descripcion</h3>
                <p><?php echo $row["lib_resumen"] ?></p>
            </div>
        </div>

    </section>

    <?php
                    
                } else {
                    echo "<p>Ha ocurrido un error inesperado !</p>";
                    echo "<p>" . mysqli_error($conn) . "</p>";
                }
                
                
                ?>





            <?php
            
           
            $sqla = "SELECT * FROM comentarios, libro WHERE comentarios.com_id_libro=libro.lib_codigo and  comentarios.com_id_libro = $codigo and comentarios.eliminado = 'N' ";
            $resulta = $conn->query($sqla);
           // echo "aqui esta el codigo:  $codigo";
           

            if ($resulta->num_rows > 0) {

            while ($rowa = $resulta->fetch_assoc()) {
                    ?>


    <section class="comentarios container">
        <div class="container">
            <h3>Comentario</h3>
            <div>
               
                <p><?php echo $rowa["comentario"] ?></p>
                <button> <a class='estilo' href='eliminar_comentario.php?comentario=" <?php echo $rowa["com_id"] ?> "'>Eliminar comentario</a> </button>

            </div>
    
        </div>

    </section>

    <?php
            }
                } else {
                    echo "<p>Ha ocurrido un error inesperado !</p>";
                    echo "<p>" . mysqli_error($conn) . "</p>";
                }
                $conn->close();
                ?>





</body>

</html>