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


<div class="formato">
<table>
     
     <?php
     include '../../config/conexionBD.php';

     $sql = "SELECT * FROM usuario";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {

         while ($row = $result->fetch_assoc()) {
             /*echo "<img src='../../imagenes/christian/usuario.png' class='name' >" ;*/
             
             echo "<tr style=' text-align: center;  background: linear-gradient(to bottom, 
             rgb(193, 194, 194), 
             rgb(228, 232, 235), 
             rgb(253, 253, 253));
                background-color: rgba(0, 0, 0, .5);' >";


             echo " <td style='width: 150px; margin-top: 15px; padding: 15px;'> "
             ."<img src='../../imagenes/christian/usuario.png' style=' height: 30%;' >"."</td>" ;
             /*echo " <td>" . "<img src='../../imagenes/christian/usuario.png' class='h'>" . "</td>";*/
             echo " <td style='  margin-top: 15px; padding: 15px;' > ".
                     
                     "<h5 >Correo electronico :</h5>"
                     ."<h3 >". $row["usu_correo"] ."</h3>"
                     ."<h5 >Contraseña :</h5>"
                     ."<h3>". $row["usu_contrasenia"] ."</h3>".
                     "<h3> <a class='estilo' href='contrasenia_usu.php?codigo=" . $row['usu_id'] . "'>Cambiar contraseña</a> </h3>". "</td>";
             echo " <td style='  margin-top: 15px; padding: 15px;'>" 
             ."<h5 >Rol:</h5>"
             ."<h3>". $row["usu_rol"] ."</h3>"
             ."<h5 >Nombre :</h5>"
             ."<h3>".$row['usu_nombre'] ."</h3>" 
             ."<h5 >Apellido :</h5>"
             ."<h3>". $row['usu_apellido'] ."</h3>".
             "</td>";
             
             echo " <td style='  margin-top: 15px; padding: 15px;'>" .
             "<h5 >Telefono :</h5>".
             "<h3>".$row['usu_telefono'] ."</h3>".
             "<h5 >Direccion :</h5>"
             ."<h3>".$row['usu_direccion'] ."</h3>". 
             "<h5 >Eliminado :</h5>"
             ."<h3>". $row["usu_eliminado"] ."</h3>". "</td>";

             echo " <td style='  margin-top: 15px; padding: 15px;'> ".
             "<h5 > </h5>".
             "<button>"."<a class='estilo' href='eliminar_usu.php?codigo=".$row['usu_id'] . "'>Eliminar Usuario</a>" ."</button>".
             "<h5 >.</h5>".
             "<button>"."<a class='estilo' href='modificar_usu.php?codigo=" . $row['usu_id'] . "'>Modificar Usuario</a>"."</button>". 
             " </td>";
             /*echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_id'] . "'>Cambiarcontraseña</a> </td>";*/
             
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
                <h3> Tu Libreria web </h3>
                
            </div>
            <i class="fas fa-book"></i>
        </div>

    </section>


    
</body>

</html>