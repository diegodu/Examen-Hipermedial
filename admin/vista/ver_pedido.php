<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../estilos_admin/estilos.css">
    <script src="../js/map.js"></script>
    
    <title>Pedidos</title>
</head>

<body>
    <header>
        <div class="bar-login">
            <div class="btns container">
                <a href="../../config/Cerrar_sesion.php"><i class="fas fa-sign-in-alt"></i> Cerrar sesion</a>
            </div>
        </div>
        <h1>Pedidos</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="index_admin.html">Inicio</a></li>
                <li><a href="usuarios_admin.php">Clientes</a></li>
                <li><a href="productos_admin.php" style="text-decoration-color: rgb(52, 122, 226);">Productos</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Facturas</a></li>

            </ul>
        </nav>

    </header>


    <section class="verPedido">
    <?php
     $codigo = $_GET["codigo"];
     include '../../config/conexionBD.php';
      $sql2 = "SELECT * FROM usuario ";
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
                    <h2>Informacion Pedido</h2>
                    <p><?php echo $row2["usu_direccion"];?></p>
                    <p><?php echo $row2["usu_direccion"];?></p>
            </div>
           
        </div>
        <?php

        
} else {
    echo "<p>Ha ocurrido un error inesperado !</p>";
    echo "<p>" . mysqli_error($conn) . "</p>";
}
$conn->close();
?>
     
        <div class="informacionPedido">
        <button> <a class='estilo' href='../controlador/estado_pedido.php?creado="C"'>Creado</a> </button>
          
            <button> <a class='estilo' href='../controlador/esta_pedido2.php?aceptado="A"'>Aceptado</a> </button>
     
            <button> <a class='estilo' href='../controlador/esta_pedido3.php?encamino="E"'>En camino</a> </button>
        
            <button> <a class='estilo' href='../controlador/esta_pedido4.php?finalizando="F"'>Finalizado</a> </button>
          
            <button> <a class='estilo' href='../controlador/esta_pedido5.php?rechazado="R"'>Rechazado</a> </button>
          
        </div>
    </section>
    


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