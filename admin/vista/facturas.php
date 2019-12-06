<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../estilos_admin/estilos.css">
    <title>Factura</title>
</head>

<body>
    <header>
        <div class="bar-login">
            <div class="btns container">
                <a href="index_admin.html"><i class="fas fa-sign-in-alt"></i> Regresar</a>
            </div>
        </div>

        <h1>FACTURA</h1>


    </header>


    <section>
        <div class="rcab">
            <div class="rfon">
                <i class="fas fa-book"></i>
            </div>
            <h2>Factura</h2>

    </section>



  

<!--------------------------------------->

    <?php
    $codigo = $_GET["codigo"];
    include '../../config/conexionBD.php';
    $sql = "SELECT *
    FROM facturacabecera AS f, factura_detalle AS fd, usuario AS u 
    WHERE f.usu_id = u.usu_id AND fd.factura_id = f.fac_ca_id and f.fac_ca_id=$codigo;";
    //echo "aqui esta el codgo:  $codigo";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
   // echo $row["usu_nombre"];
    ?>

<section class="facContenido">
        <div>
            <h2>Cliente: <span><?php echo $row["usu_nombre"].$row["usu_apellido"]; ?></span> </h2>
            <h2>Direccion: <span><?php echo $row["usu_direccion"];?></span></h2>
            <h2>Telefono: <span><?php echo $row["usu_telefono"];?></span></h2>
        </div>

        <div class="Fecha">
            <h2>Fecha: <span><?php echo $row["fac_ca_fecha"];?></span></h2>
        </div>

    </section>


    <section class="factTabla">


    <?php
      $sql1 = "SELECT *
      FROM facturacabecera AS f, factura_detalle AS fd, libro AS l
      WHERE f.fac_ca_id = fd.factura_id and fd.lib_codigo=l.lib_codigo and f.fac_ca_id=$codigo;";
      //echo "aqui esta el codgo:  $codigo";
      
      $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {

        ?>
        <table >
        <tr>
            <th>NOMBRE</th>
            <th>CANTIDAD</th>
            <th>PRECIO.U</th>
            <th>SUBTOTAL</th>
        </tr>
  
    </table>
        
<?php

        while ($row1 = $result1->fetch_assoc()) {
            $aux=$row1["cantidad"];
            $aux2=$row1["lib_precio"];

  
        echo"<table > <tr>".
          "<td>". $row1["lib_titulo"]."</td>".
          "<td>".$row1["cantidad"]."</td>".
          "<td>".$row1["lib_precio"]."</td>".
          "<td>".($aux*$aux2)."</td>".
      "</tr> </table>";
        }
    } else {
        echo "<p>Ha ocurrido un error inesperado !</p>";
        echo "<p>" . mysqli_error($conn) . "</p>";
    }
    
    ?>
   



<!------------------------------------------->
<?php
      $sql2 = "SELECT *
      FROM facturacabecera AS f, factura_detalle AS fd, libro AS l
      WHERE f.fac_ca_id = fd.factura_id and fd.lib_codigo=l.lib_codigo and f.fac_ca_id=$codigo; ";
      //echo "aqui esta el codgo:  $codigo";
      
      $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();

        ?>
    </section>
    <section class="facPago">
        <div class="calculapago1">
        <input type="" placeholder="Subtotal" disabled >
            <h3><?php echo $row2["fac_ca_subtotal"];?></h3>
            

        </div>
        <div class="calculapago1">
        <input type="" placeholder="Iva" disabled>
            <h3>12%</h3>
          

        </div>

        <div class="calculapago1" style="background-color: rgb(226, 137, 4)">
        <input style="background-color: rgb(226, 137, 4)" type="" placeholder="Total" disabled>
            <h2><?php echo $row2["fac_ca_total"];?></h3>
                

        </div>

    </section> 
    <?php

        
    } else {
        echo "<p>Ha ocurrido un error inesperado !</p>";
        echo "<p>" . mysqli_error($conn) . "</p>";
    }
    $conn->close();
    ?>



    <section class="information">
        <div class="container">
            <div>
                <h3>Tu libreria Web</h3>
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>
    



</body>

</html>