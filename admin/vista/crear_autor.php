<?php
include '../../config/conexionBD.php';
$query=mysqli_query($conn, "SELECT * FROM pais ");


if(isset($_POST['pais'])){
    if(isset($_POST['nombre'])){
        if(isset($_POST['apellido'])){
            $pa=$_POST['pais'];
            $nom=$_POST['nombre'];
            $apell=$_POST['apellido'];

            echo $pa;
            $sql = "INSERT INTO  autor VALUES (0,$pa,'$nom','$apell') "; 
            if ($conn->query($sql) === TRUE) {
                echo "Se ha actualizado los datos personales correctamemte!!!<br>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
            }
            
        }
    }
}
if(isset($_POST['nom_pais'])){
    $nom_pa=$_POST['nom_pais'];
    echo $nom_pa;
    $sql = "INSERT INTO  pais VALUES (0,'$nom_pa') "; 
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
}
if(isset($_POST['categoria'])){
    $categoria=$_POST['categoria'];
    $descripcion=$_POST['descripcion'];
    echo $categoria;
    $sql = "INSERT INTO  genero VALUES (0,'$categoria','$descripcion') "; 
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Inicio</title>
</head>

<body>
    <header>
        <h1>LIBRO</h1>
        
    </header>

    <section id="contenido">
   
    <form id="formulario01" method="POST" action="crear_autor.php" >

  

    <label for="pais">Pais (*)</label>
    <!--pais -->
    <div style="width: auto ; margin: 0 auto; ">
    <center>
        <select name="pais" id="pais" style="padding: 10px; margin: 10px; width: 90%;">
            <?php
            while($datos = mysqli_fetch_array($query)){

            
            ?>
            <option value="<?php echo $datos['pais_codigo']; ?>"><?php echo $datos['pais_nombre']?></option>
            <?php
            }

            ?>
        </select>
    </center>

    </div>


        <input type="text" id="nombre" name="nombre" value="" placeholder="Ingrese el nombre del autor ..." required />
        <br>


    <br>
  
        <input type="text" id="apellido" name="apellido" value="" placeholder="Ingrese el apellido del autor
..." required />
        <br>

        
        <input type="submit" id="Crear" name="crear" value="Aceptar" />
        <button><a href='productos_admin.php' style="text-decoration: none">Cancelar</a></button>
    </form>





    </section>



    <!-------------------------------------->
    <section id="contenido">
   
   <form id="formulario02" method="POST" action="crear_autor.php">

 


   <!--pais -->
   <label for="nom_pais">Nombre del Pais (*)</label>
       <input type="text" id="nom_pais" name="nom_pais" value="" placeholder="Ingrese el nombre del pais ..." required />
       <br>


   <br>

       
       <input type="submit" id="Crear" name="crear" value="Aceptar" />
       <button><a href='productos_admin.php' style="text-decoration: none">Cancelar</a></button>
   </form>





   </section>
   <!------------------------------------------------------------------>

<!-------------------------------------->
<section id="contenido">
   
   <form id="formulario03" method="POST" action="crear_autor.php">

 

   <label for="categoria">Categoria (*)</label>
   <!--pais -->
       <input type="text" id="categoria" name="categoria" value="" placeholder="Ingrese el nombre de la categoria ..." required />
       <br>


   <br>
   <label for="descripcion">Descripcion (*)</label>
       <input type="text" id="descripcion" name="descripcion" value="" placeholder="Ingrese una descripcion..." required />
       <br>


   <br>

       
       <input type="submit" id="Crear" name="crear" value="Aceptar" />
       <button><a href='productos_admin.php' style="text-decoration: none">Cancelar</a></button>
   </form>





   </section>
   <!------------------------------------------------------------------>














</body>

</html>