<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../estilos_admin/estilos.css">
    <title>Inicio Administrador</title>
</head>

<body>
    <header>
      
        <h1>Usuarios Registrados</h1>
        <nav class="nav-bar container">
            <ul>
                <li><a href="index_admin.html">Inicio</a></li>
                <li><a href="usuarios_admin.php"  >Clientes</a></li>
                <li><a href="productos_admin.php">Productos</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="factura.php">Facturas</a></li>
             
            </ul>
        </nav>

    </header>
    
<!-------------------------------------------------------------->
<h2>Usuarios</h2>

<div class="formato">
<table>
     
     <?php
     include '../../config/conexionBD.php';

     $sql = "SELECT u.usu_nombre, u.usu_apellido, u.usu_correo, u.usu_direccion, f.fac_ca_fecha,f.fac_ca_id 
     FROM facturacabecera AS f, factura_detalle AS fd, usuario AS u 
     WHERE f.usu_id = u.usu_id AND fd.factura_id = f.fac_ca_id
     GROUP BY f.fac_ca_id;";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {

         while ($row = $result->fetch_assoc()) {
             /*echo "<img src='../../imagenes/christian/usuario.png' class='name' >" ;*/
             
             echo "<tr style=' text-align: center;  background: linear-gradient(to bottom, 
             rgb(207, 223, 226), 
             rgb(112, 183, 224), 
             rgb(95, 114, 226));' >";


             echo " <td style='width: 150px; margin-top: 15px; padding: 15px;'> "
             ."<img src='../../imagenes/christian/usuario.png' style=' height: 30%;' >"."</td>" ;
             /*echo " <td>" . "<img src='../../imagenes/christian/usuario.png' class='h'>" . "</td>";*/
             echo " <td style='  margin-top: 15px; padding: 15px;' > ".
                     
                     "<h5 >Correo electronico :</h5>"
                     ."<h3 >". $row["usu_correo"] ."</h3>";
             echo " <td style='  margin-top: 15px; padding: 15px;'>" 
             ."<h5 >Nombre :</h5>"
             ."<h3>".$row['usu_nombre'] ."</h3>" 
             ."<h5 >Apellido :</h5>"
             ."<h3>". $row['usu_apellido'] ."</h3>".
             "</td>";
             
             echo " <td style='  margin-top: 15px; padding: 15px;'>" .
             "<h5 >Direccion :</h5>"
             ."<h3>".$row['usu_direccion'].
             "<h5 >Fecha :</h5>"
             ."<h3>".$row['fac_ca_fecha'] .
             "<h5 >N Factura:</h5>"
             ."<h3>".$row['fac_ca_id'] 
             
             
             ."</h3>";
             echo " <td style='  margin-top: 15px; padding: 15px;'> ".
             "<h5 > </h5>".
             "<button>"."<a class='estilo' href='facturas.php?codigo=".$row['fac_ca_id'] . "'>Factura</a>" ."</button>".
             "<h5 >.</h5>";
             
             echo "</tr>";
           
             
         }
     } else {
         echo "<tr>";
         echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
         echo "</tr>";
     }



     $conn->close();
     ?>
 </table>
</div>

<!------------------php---------------------------->










<!-------------------------------------------------------------->


    <section class="information">
        <div class="container">
            <div>
                <h3>Libreria Virtual</h3>
              
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>


</body>

</html>