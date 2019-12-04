        <section class="cat container" id="dcategoria">
            <section class="information">
                <div class="info_cat">
                    <div>
                        <h3><?php echo $_GET["categoria"]?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi non explicabo quia voluptas
                            eos
                            repellat. Eos quasi, reprehenderit dignissimos harum minus impedit veritatis voluptatibus,
                            distinctio doloribus repellendus consequuntur a dicta.</p>
                    </div>

                </div>

            </section>


            <section class="maincontent container">
                <h2>RESULTADO</h2>
                <?php
                include '../../config/conexionBD.php';

                $sql = 'SELECT * FROM libro l, genero g WHERE l.gen_codigo = g.gen_codigo AND g.gen_nombre = "'.$_GET["categoria"].'";';
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
                    echo "<h2> No hay Libros Con esa categoria </h2>";
                }
                $conn->close();
                ?>
            </section>
        </section>