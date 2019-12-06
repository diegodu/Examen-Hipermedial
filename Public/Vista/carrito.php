<?php
session_start();
if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['rol'] == 'admin') {
        header("Location: ../../admin/admin/view/index.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Carrito</title>
</head>

<body>
    <?php include "include/header.php" ?>
    <section class="carrito">
        <h3>Producto</h3>
        <h3>Precio Unitario</h3>
        <h3>Cantidad</h3>
        <h3>Precio Subtotal</h3>
    </section>
    <div id="carritoDetalle">
        <section class="carro">
            <?php
            include '../../config/conexionBD.php';

            $sql = "SELECT * FROM carrito c, libro l WHERE c.usu_codigo =" . $_SESSION["usu_codigo"] . " AND c.lib_codigo = l.lib_codigo;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="carrito2">
                        <figure>
                            <img src="../../imagenes/libros/<?php echo $row["img"] ?>">
                            <p><?php echo $row["lib_titulo"] ?></p>
                        </figure>
                        <p>$<?php echo $row["lib_precio"] ?></p>
                        <input type="number" placeholder="Cantidad" value="<?php echo $row["car_cantidad"] ?>" max="100" min="0" onchange='actualizarCarrito(<?php echo $row["car_codigo"] . "," ?> this)'>
                        <input type="" placeholder="Subtotal" value="<?php echo $row["car_cantidad"] * $row["lib_precio"] ?>">
                    </div>
            <?php
                }
            }
            ?>

        </section>
        <section class="pago">

            <div class="calculapago">
                <?php
                $sqlSub = "SELECT SUM(l.lib_precio*c.car_cantidad) as subtotal FROM carrito c, libro l WHERE usu_codigo=" . $_SESSION['usu_codigo'] . " AND  l.lib_codigo = c.lib_codigo ;";
                $resultSub = $conn->query($sqlSub);
                $rowSub = $resultSub->fetch_assoc();
                if (isset($rowSub['subtotal'])) {

                    $total = $rowSub['subtotal'] * 1.12;
                    ?>
                
                    <span>Subtotal: <?php echo $rowSub['subtotal'] ?></span>
                    <span>Total: <?php echo $total ?></span>
                <?php
                } else {
                    ?>
                    <span>Subtotal: 0</span>
                    <span>Total: 0</span>
                <?php
                }
                ?>
            </div>
            <a href="#" onclick="realizarPedido()">Realizar pedido</a>



        </section>
    </div>
        <?php include "include/footer.php" ?>
        <script src="../js/funciones.js"></script>

</html>