<!DOCTYPE html>
<html lang="es">

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
      
        <h1>Pedidos Registrados</h1>
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

<div class="formato">
<table>
     
     <?php
     include '../../config/conexionBD.php';

     $sql = "SELECT u.usu_nombre, u.usu_apellido, u.usu_correo, u.usu_direccion, f.fac_ca_fecha,f.fac_ca_id, fac_estado 
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
                     ."<h3 >". $row["usu_correo"] ."</h3>".
                     "<h5 >Estado</h5>"
                     ."<h3>".$row['fac_estado'] ."</h3>";
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
             "<button>"."<a class='estilo' href='ver_pedido.php?codigo=".$row['fac_ca_id'] . "'>Pedido</a>" ."</button>".
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
                <h3>Obten los mejores libros</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi non explicabo quia voluptas eos
                    repellat. Eos quasi, reprehenderit dignissimos harum minus impedit veritatis voluptatibus,
                    distinctio doloribus repellendus consequuntur a dicta.</p>
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>


    <footer>
        <div class="contact container">
            <div>
                    
            </div>
            <div class="redes">
                <div>
                        <h3>Contactos</h3>
                        <p>Cuenca-Ecuador </p>
                        <a href="https://www.ups.edu.ec/">Universida Politecnica Salesiana</a>
                        
                        <p>Telefono <a href="tel:+0999287912">0999287912</a></p>
                        
                        <p>E-mail <a href="mailto:dduchimazad@est.ups.edu.ec">dduchimazad@est.ups.edu.ec</a></p>
                        

                </div>
                <div>
                        <h3>Siguenos</h3>
                        <p>Siguenos en nuestras redes sociales</p>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter-square"></i>

                </div>
                   
                    

            </div>

        </div>

        <div class="about container">
            <div class="info">
                <h3>Informacion</h3>
                <p>Quienes somos</p>
                <p>Mision</p>
                <p>Vision</p>
                <p>Contactos</p>


            </div>
            <div class="libro">
                    <h3>Libros</h3>
                    <p>Matematicas</p>
                    <p>Ciencias Naturales</p>
                    <p>Estudios sociales</p>
                    <p>Literartura</p>

            </div>
            <div class="integrantes">
                    <h3>Integrantes</h3>
                    <p>Daniel Guzman</p>
                    <p>Christian Rivera</p>
                    <p>Diego Duchimaza</p>
                    <p>Pablo Malla</p>

            </div>
            

        </div>
        <div class="target">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
        </div>

    </footer>
</body>

</html>