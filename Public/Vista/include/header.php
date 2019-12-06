<header>
    <div class="bar-login">
        <div class="btns container">
           
            <?php 
                if (isset($_SESSION['isLogged'])) {
                  ?>
                     <a href="../Vista/carrito.php"><i class="fas fa-cart-arrow-down"></i></a>
                     <a href="../Vista/crear_usuario.php"><i class="fas fa-user"></i> <?php echo ($_SESSION['usu_nombre']." ".$_SESSION['usu_apellido'])?></a>
                     <a href="../../config/Cerrar_sesion.php"><i class="fas fa-user"></i> Cerrar Sesion</a>
                  <?php
                }else{

                    ?> 
                     <a href="../Vista/login.php"><i class="fas fa-sign-in-alt"></i> Iniciar sesion</a>
                    <a href="../Vista/crear_usuario.php"><i class="fas fa-user"></i> Registro</a>
                    <?php 
                }
            
            ?>
           
        </div>
    </div>
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
                    <input onkeyup="buscar(this, 'index')" type="search" name="" id="" placeholder="Buscar">
                    <i class="fas fa-search"></i>
                    <div class="listaBuscarLibro">
                    
                    </div>
                   

                </div>
            </li>
        </ul>
    </nav>

</header>
