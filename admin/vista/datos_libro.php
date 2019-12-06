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
    
        <h1>Modificar Libro</h1>
      

    </header>
    
<!-------------------------------------------------------------->

<section>
    <?php
    $codigo = $_GET["dat"];
    include '../../config/conexionBD.php';
    $sql = "SELECT * FROM libro where lib_codigo=$codigo";
   // echo "aqui esta el codgo:  $codigo";
    
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
                <h3>Libreria Virtual</h3>
              
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>

</body>

</html>