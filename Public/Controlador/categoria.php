  <?php

    include '../../config/conexionBD.php';
    $sqlGeneroCod = 'SELECT * FROM genero where gen_nombre="'. $_GET["categoria"] .'";';
                                    $sqlGeneroCod = $conn->query($sqlGeneroCod);
                                    $sqlGeneroCod = $sqlGeneroCod->fetch_assoc();
  ?>
  <section class="cat container" id="dcategoria">
            <section class="information">
                <div class="info_cat">
                    <div>
                        <h3><?php echo $sqlGeneroCod["gen_nombre"]?></h3>
                        <p><?php echo $sqlGeneroCod["gen_descripcion"]?></p>
                    </div>

                </div>

            </section>


            <section class="maincontent container">
                <h2>RESULTADO</h2>
                
<?php
                $sql = 'SELECT * FROM libro l, genero g WHERE l.gen_codigo = g.gen_codigo AND g.gen_nombre = "'.$_GET["categoria"].'";';
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
                    echo "<h2> No hay Libros Con esa categoria </h2>";
                }
                $conn->close();
                ?>
            </section>
        </section>