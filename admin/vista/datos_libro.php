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
    
        <h1>Modificar Librp</h1>
      

    </header>
    
<!-------------------------------------------------------------->
<h2>Modificar</h2>
<section>
    <?php
    $codigo = $_GET["dat"];
    include '../../config/conexionBD.php';
    $sql = "SELECT * FROM libro where lib_codigo=$codigo";
    echo "aqui esta el codgo:  $codigo";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <section >
            <form id="formulario01" method="POST" action="../controlador/modificra_libro.php ">

                <input type="hidden" id="codigo" name="codigo" value="<?php echo $row["lib_codigo"]; ?>" />



                <label for="ISBN">ISBN (*)</label>
                <input type="text" id="ISBN" name="ISBN" value="<?php echo $row["lib_isbn"]; ?>" required placeholder="Ingreseun el isbn ..." />
                <br>
                <label for="titulo">titulo (*)</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $row["lib_titulo"];
                                                                                ?>" required placeholder="Ingrese el titulo..." />
                <br>
                <label for="stock">stock (*)</label>
                <input type="text" id="stock" name="stock" value="<?php echo $row["lib_stock"];
                                                                                    ?>" required placeholder="Ingrese la cantidad de libros ..." />
                <br>
                <label for="vendidos">vendidos (*)</label>
                <input type="text" id="vendidos" name="vendidos" value="<?php echo $row["lib_vendidos"];
                                                                                    ?>" required placeholder="cantidad vendida..." />
                <br>
                <label for="precio">precio (*)</label>
                <input type="text" id="precio" name="precio" value="<?php echo $row["lib_precio"];
                                                                                ?>" required placeholder="valordel libro..." />
                <br>
           
                <label for="observaciones">Observaciones (*)</label>
                <input type="text" id="observaciones" name="observaciones" value="<?php echo $row["lib_observaciones"]; ?>" required placeholder="Ingrese algunas observaciones ..." />
                <br>

                <label for="resumen">resumen (*)</label>
                <input type="text" id="resumen" name="resumen" value="<?php echo $row["lib_resumen"]; ?>" required placeholder="Ingrese un resumen ..." />
                <br>
                <label for="novedad">novedad (*)</label>
                <input type="text" id="novedad" name="novedad" value="<?php echo $row["lib_novedad"]; ?>" required placeholder="Ingrese una novedad ..." />
                <br>
                <label for="idioma">idioma (*)</label>
                <input type="text" id="idioma" name="idioma" value="<?php echo $row["lib_idioma"]; ?>" required placeholder="Ingrese un idioma..." />
                <br>
                <label for="editorial">editorial (*)</label>
                <input type="text" id="editorial" name="editorial" value="<?php echo $row["lib_editorial"]; ?>" required placeholder="Ingrese la editorial ..." />
                <br>
                <label for="paginas">paginas (*)</label>
                <input type="text" id="paginas" name="paginas" value="<?php echo $row["lib_paginas"]; ?>" required placeholder="Ingrese umero de paginas..." />
                <br>
                <label for="anio">anio (*)</label>
                <input type="text" id="anio" name="anio" value="<?php echo $row["lib_anio"]; ?>" required placeholder="Ingrese el anio de publicacion ..." />
                <br>

                <button><input type="submit" id="modificar" name="modificar" value="Modificar" /></button>
               
              
                
            </form>
            <button class="formul"><a href="productos_admin.php" class="estilose"> Cancelar</a></button>
            </section>
            
    <?php
        }
    } else {
        echo "<p>Ha ocurrido un error inesperado !</p>";
        echo "<p>" . mysqli_error($conn) . "</p>";
    }
    $conn->close();
    ?>
    </section>


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