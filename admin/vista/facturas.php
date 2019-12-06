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
    $sql = "SELECT * FROM usuario where usu_id=$codigo";
    echo "aqui esta el codgo:  $codigo";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row["usu_nombre"];
    ?>

<section class="facContenido">
        <div>
            <h2>Cliente: <span><?php echo $row["usu_nombre"].$row["usu_apellido"]; ?></span> </h2>
            <h2>Direccion: <span><?php echo $row["usu_direccion"];?></span></h2>
            <h2>Telefono: <span><?php echo $row["usu_telefono"];?></span></h2>
        </div>

        <div class="facFecha">
            <h2>Fecha: <span>12/05/2019</span></h2>
        </div>

    </section>


    <section class="factTabla">


    <?php
      $sql1 = "SELECT * FROM usuario ";
      echo "aqui esta el codgo:  $codigo";
      
      $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {

        ?>
        <table >
        <tr>
            <th>NOMBRE</th>
            <th>CANTIDAD</th>
            <th>SUBTOTAL</th>
        </tr>
  
    </table>
        
<?php

        while ($row1 = $result1->fetch_assoc()) {
  
        echo"<table > <tr>".
          "<td>". $row1["usu_nombre"]."</td>".
          "<td>".$row1["usu_direccion"]."</td>".
          "<td>".$row1["usu_telefono"]."</td>".
      "</tr> </table>";
        }
    } else {
        echo "<p>Ha ocurrido un error inesperado !</p>";
        echo "<p>" . mysqli_error($conn) . "</p>";
    }
    
    ?>
   



<!------------------------------------------->
<?php
      $sql2 = "SELECT * FROM usuario ";
      echo "aqui esta el codgo:  $codigo";
      
      $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();

        ?>
    </section>
    <section class="facPago">
        <div class="calculapago1">
        <input type="" placeholder="Subtotal" disabled >
            <h3><?php echo $row2["usu_direccion"];?></h3>
            

        </div>
        <div class="calculapago1">
        <input type="" placeholder="Iva" disabled>
            <h3><?php echo $row2["usu_direccion"];?></h3>
          

        </div>

        <div class="calculapago1">
        <input type="" placeholder="Descuento" disabled>
            <h3><?php echo $row2["usu_direccion"];?></h3>
            
        </div>
        <div class="calculapago1" style="background-color: rgb(226, 137, 4)">
        <input style="background-color: rgb(226, 137, 4)" type="" placeholder="Total" disabled>
            <h2><?php echo $row2["usu_direccion"];?></h3>
                

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
            <div id="map">

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