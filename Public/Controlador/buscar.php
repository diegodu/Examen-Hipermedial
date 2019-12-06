<?php
session_start();
if (isset($_SESSION['isLogged'])) {
  if ($_SESSION['usu_rol'] == 'admin') {
    header("Location: ../../admin/vista/index_admin.html");
  }
}
include '../../config/conexionBD.php';
    ?>

       <h2>Resultados Busqueda</h2>
       <?php
       include '../../config/conexionBD.php';

       $sql = "SELECT * FROM libro WHERE lib_titulo LIKE '%".$_GET['texto']."%';";
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
           echo "<h2> No hay Resultados </h2>";
       }
       $conn->close();
       ?>

    
