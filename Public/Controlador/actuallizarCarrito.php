<?php
session_start();
if (isset($_SESSION['isLogged'])) {
  if ($_SESSION['usu_rol'] == 'admin') {
    header("Location: ../../admin/vista/index_admin.html");
  }
}

if (isset($_GET['codCarrito'])) {
  include '../../config/conexionBD.php';
  if ($_GET['carritoCantidad']==0) {
    $sql = "DELETE FROM carrito WHERE 
    car_codigo=" . $_GET['codCarrito'] . " ;";
    $conn->query($sql);
  }else{
    $cantidad =$_GET['carritoCantidad'];
    $sql = "UPDATE carrito SET
    car_cantidad ='$cantidad'
    WHERE car_codigo=" .$_GET['codCarrito'] . ";";
    $conn->query($sql);
  }
}

$sql = "SELECT * FROM carrito c, libro l WHERE c.usu_codigo =".$_SESSION["usu_codigo"]." AND c.lib_codigo = l.lib_codigo;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
    ?>
        <section class="carro">
            <?php

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
                <h2>Total</h2>
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
            <a href="#" onclick="realizarPedido()">Agregar pedido</a>



        </section>
    </div>
        <?php
            }
        }
        ?>