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

    <?php include "include/header.php" ?>
  

    <section class="usuPedido">
        <div class="usuTabla">
        <table>
            <tr>
                <th>Pedido</th>
                <th>Estado</th>
            </tr>
            <!-------------------------------------------------->
            <?php
     include '../../config/conexionBD.php';

     $sql = "SELECT u.usu_nombre, u.usu_apellido, u.usu_correo, u.usu_direccion, f.fac_ca_fecha,f.fac_ca_id, fac_estado 
     FROM facturacabecera AS f, factura_detalle AS fd, usuario AS u 
     WHERE f.usu_id = u.usu_id AND fd.factura_id = f.fac_ca_id AND u.usu_id= ". $_SESSION["usu_codigo"] ."
     GROUP BY f.fac_ca_id;";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {

         while ($row = $result->fetch_assoc()) {
             
             ?>
             <!---------------------------------------------------------->
            <tr>
                <td><?php echo $row["fac_ca_id"];?></td>
                <td><?php echo $row["fac_estado"];?></td>
            
            </tr>
              <!-------------------------------------------------------------------->
              <?php     
}
     } else {
         echo "<tr>";
         echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
         echo "</tr>";
     }



     $conn->close();
     ?>
     <!---------------------------------------------------------------------------->

        </table>
        </div>
 

    </section>
    
    <?php include "include/footer.php" ?>
</body>

</html>