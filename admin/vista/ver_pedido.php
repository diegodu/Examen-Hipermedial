<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../estilos_admin/estilos.css">
    <script src="../js/map.js"></script>
    
    <title>Pedido</title>
</head>

<body>
    <header>
        <div class="bar-login">
            <div class="btns container">
                <a href="pedidos.php"><i class="fas fa-sign-in-alt"></i> Regresar</a>
            </div>
        </div>
        <h2>Informacion Pedido</h2>
    

    </header>


    <section class="verPedido">
    <?php
     $codigo = $_GET["codigo"];
     include '../../config/conexionBD.php';
      $sql2 = "SELECT u.usu_nombre, u.usu_apellido, u.usu_correo, u.usu_direccion, f.fac_ca_fecha,f.fac_ca_id,SUM(FD.cantidad) AS cantidad 
      FROM facturacabecera AS f, factura_detalle AS fd, usuario AS u 
      WHERE f.usu_id = u.usu_id AND fd.factura_id = f.fac_ca_id and f.fac_ca_id=$codigo; ";
      echo "aqui esta el codgo:  $codigo";
      
      $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();

        ?>
        <div class="verPedidoIm">
            <figure>
                <img src="../../imagenes/descarga-1.png" alt="">
            </figure>
            <div class="descripcionPedido">
                    <br>
                    <br>
                    <br>
                    <h3>Nombre</h3>
                   
                    <p><?php echo $row2["usu_nombre"];?></p>
                    <h3>Apellido</h3>
                    
                    <p><?php echo $row2["usu_apellido"];?></p>
                    <h3>Correo</h3>
                    
                    <p><?php echo $row2["usu_correo"];?></p>
                    <h3>Direccion</h3>
                    
                    <p><?php echo $row2["usu_direccion"];?></p>
                    <h3>Fecha del pedido</h3>
                    
                    <p><?php echo $row2["fac_ca_fecha"];?></p>
                    <h3>Cantidad de productos</h3>
                  
                    <p><?php echo $row2["cantidad"];?></p>
            </div>
           
        </div>
        <?php

        
} else {
    echo "<p>Ha ocurrido un error inesperado !</p>";
    echo "<p>" . mysqli_error($conn) . "</p>";
}

?>
     
        <div class="informacionPedido">
        <button> <a class='estilo' href='../controlador/estado_pedido.php?creado="<?php echo $row2["fac_ca_id"];?>"'>Creado</a> </button>
          
            <button> <a class='estilo' href='../controlador/esta_pedido2.php?aceptado="<?php echo $row2["fac_ca_id"];?>"'>Aceptado</a> </button>
     
            <button> <a class='estilo' href='../controlador/esta_pedido3.php?encamino="<?php echo $row2["fac_ca_id"];?>"'>En camino</a> </button>
        
            <button> <a class='estilo' href='../controlador/esta_pedido4.php?finalizado="<?php echo $row2["fac_ca_id"];?>"'>Finalizado</a> </button>
          
            <button> <a class='estilo' href='../controlador/esta_pedido5.php?rechazado="<?php echo $row2["fac_ca_id"];?>"'>Rechazado</a> </button>
          
        </div>
    </section>

    <?php

$conn->close();
?>
    


<!---mapa-->
    
    <input id="start" type="hidden" name="" value="<?php echo $row2['usu_direccion'];?>">
    <input id="end" type="hidden" name="" value="Av. Turuhuayco & Calle Vieja, Cuenca">
    
    <div class="contentMap">
    <h2>Ruta de envio</h2>
    <div class="contenedorM">
        <div id="map"></div>
        <div id="right-panel"></div>
    </div>
    </div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjz6eJHmjVFuC-W5B5IhuWj4i9hE0aHJs&callback=initMap" type="text/javascript"></script>
    <script src="../js/map.js"></script>

    
</body>

</html>