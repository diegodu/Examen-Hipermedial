<?php
session_start();
if (isset($_SESSION['isLogged'])) {
  if ($_SESSION['usu_rol'] == 'admin') {
    header("Location: ../../admin/vista/index_admin.html");
  }
}
include '../../config/conexionBD.php';
if(isset($_GET['codProducto'])){
    $sqlInsert = "INSERT INTO comentarios ( 
        com_id_libro,
        com_id_usuario,
        comentario) 
        VALUES (  
        " . $_GET['codProducto'] . ",
        " . $_SESSION['usu_codigo'] . ", 
        '" . $_GET['comentario']  . "'
    );";
    if($conn->query($sqlInsert)){
        echo "Coemntario incertado";
    }else{
        echo "Coemntario NO incertado";
    }
}
        $sqlre = "SELECT u.usu_nombre as nombre, c.comentario as comentario FROM libro l, comentarios c, usuario u WHERE c.com_id_libro = l.lib_codigo AND u.usu_id = c.com_id_usuario AND l.lib_codigo =" . $_GET["codProducto"] . ";";
        $resultre = $conn->query($sqlre);
        if ($resultre->num_rows > 0) {

            while ($row = $resultre->fetch_assoc()) {
                ?>
                <div class="container">

                    <div>
                        <h3><?php echo $row["nombre"] ?></h3>
                        <p><?php echo $row["comentario"] ?></p>

                    </div>

                </div>


        <?php

            }
        } else {
            echo "<h2> No hay comentarios </h2>";
        }
        $conn->close();
        ?>