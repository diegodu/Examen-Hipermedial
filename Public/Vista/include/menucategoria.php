<nav id="menu-categorias">
    <h3>Categorias</h3>
    <?php
    include '../../config/conexionBD.php';

    $sql = "SELECT * FROM genero;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {


        while ($row = $result->fetch_assoc()) {
            $sqlGenero = 'SELECT COUNT(l.gen_codigo) as cantidad FROM libro l, genero g WHERE l.gen_codigo = g.gen_codigo AND
                g.gen_nombre = "' . $row["gen_nombre"] . '";';
            $sqlGenero = $conn->query($sqlGenero);
            $sqlGenero = $sqlGenero->fetch_assoc();
            if ($sqlGenero["cantidad"] > 0) {
                # code...

                ?>
                <div class="categoria-item">
                    <a onclick="buscarCategoria(this)"><?php echo $row["gen_nombre"] ?></a>
                    <?php


                                ?>
                    <span><?php echo $sqlGenero["cantidad"] ?></span>
                </div>

    <?php
            }
        }
    }
    ?>
</nav>