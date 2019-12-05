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
    <header>
        
        <h1>LIBRERIA</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="../Vista/index.html">Inicio</a></li>
                <li><a href="../Vista/cat_seleccionada.html">Categorias</a>
                </li>
                <li><a href="#">Quienes somos</a>
                </li>
                <li><a href="#">Contactos</a></li>
                <li>
                    <div class="search-content">
                        <input type="search" name="" id="" placeholder="Buscar">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
            </ul>
        </nav>

    </header>

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