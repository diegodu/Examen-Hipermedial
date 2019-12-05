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
<?php include "include/header.php"?>
    <section class="carrito">
        <h3>Producto</h3>
        <h3>Precio Unitario</h3>
        <h3>Cantidad</h3>
        <h3>Precio Subtotal</h3>
    </section>

    <section class="carro">
        <div class="carrito2">
            <figure>
                <img src="../../imagenes/descarga-1.png">
                <p>Harry Potter 4</p>
            </figure>
            <p>12,00</p>
            <input type="number" placeholder="Cantidad">
            <input type="" placeholder="Subtotal">
        </div>
        <!--
        <div class="carrito2">
            <figure>
                <img src="../../imagenes/img2.png">
                <p>Harry Potter 4</p>
            </figure>
            <p>12,00</p>
            <input type="number" placeholder="Cantidad">
            <input type="" placeholder="Subtotal">
        </div>
        <div class="carrito2">
            <figure>
                <img src="../../imagenes/img2.png">
                <p>Harry Potter 4</p>
            </figure>
            <p>12,00</p>
            <input type="number" placeholder="Cantidad">
            <input type="" placeholder="Subtotal">
        </div>-->
    </section>
    <section class="pago">
       
        <div class="calculapago">
            <h2>Total</h2>
            <input type="" placeholder="Total">
        </div>

        <input class="pagarC" type="button" value="Realizar Pedido">
        
        

    </section> 

    <?php include "include/footer.php"?>


</html>