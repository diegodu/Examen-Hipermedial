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
  
    <div class="contenedor">


            <div id="map" class="map"> </div>
            <script>
                // Initialize and add the map
                function initMap() {
                    var directionsService = new google.maps.DirectionsService;
                    var directionsDisplay = new google.maps.DirectionsRenderer;

                    navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);

                    function fn_mal() {}

                    function fn_ok(rta) {
                        var lat = rta.coords.latitude;
                        var lon = rta.coords.longitude;
                        console.log("Latitud: " + lat + " longitud: " + lon);

                        var start = {
                            lat: lat,
                            lng: lon
                        };

                        var waypts = [{
                            
                            location: {
                                lat: -2.923055,
                                lng: -79.066342
                            },
                            stopover: true
                        }, {
                            location: {
                                lat: lat,
                                lng: lon
                            },
                            stopover: true
                        }];

                        console.log(lat, lon)


                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 6,
                            center: {
                                lat: waypts[0].location.lat,
                                lng: waypts[0].location.lng
                            }
                        });
                        directionsDisplay.setMap(map);
                        directionsService.route({
                            origin: {
                                lat: waypts[0].location.lat,
                                lng: waypts[0].location.lng
                            },
                            destination: {
                                lat: waypts[1].location.lat,
                                lng: waypts[1].location.lng
                            },
                            waypoints: waypts,
                            travelMode: google.maps.TravelMode.WALKING
                        }, function(response, status) {
                            if (status === 'OK') {
                                directionsDisplay.setDirections(response);
                            } else {
                                window.alert('Directions request failed due to ' + status);
                            }
                        });
                    }
                }
            </script>








            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2wESqJq6cIkEb7WMUZswtEoGVtyL4rkM&callback=initMap" async defer></script>
        </div>
      

  
    






</body>

</html>