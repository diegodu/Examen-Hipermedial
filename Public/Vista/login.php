<?php 

    session_start();
    if (isset($_SESSION['isLogged'])) {
        if ($_SESSION['usu_rol'] == 'admin') {
            header("Location: ../../admin/vista/index_admin.html");
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
    <title>Inicio</title>
</head>

<body>
    <header>
        <h1>LIBRERIA</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="../Vista/index.php">Inicio</a></li>
                <li><a href="../Vista/cat_seleccionada.php">Categorias</a>
                </li>
                <li><a href="./quiens.php">Quienes somos</a>
                </li>
                <li><a href="#contactos">Contactos</a></li>
                <li>
                    <div class="search-content">
                        <input type="search" name="" id="" placeholder="Buscar">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <section id="contenido">
            <form id="formulario01" method="POST" action="../Controlador/loginU.php">
                <h2 style="text-align: center; color: white;">Login</h2>
    
                <div class="ubicarIco">
                    <i class="far fa-envelope"></i>
                    <input type="text" name="correo" value="" placeholder="Correo" id="correo">
                </div>
                <div class="ubicarIco">
                    <i class="fas fa-user-lock"></i>
                    <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena">
                </div>
            
                <input type="submit" value="ENVIAR" id="boton">
            </form>
        </section>

        <?php include "include/footer.php"?>
</body>

</html>