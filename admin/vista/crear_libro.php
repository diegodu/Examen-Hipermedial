<?php
include '../../config/conexionBD.php';
$query=mysqli_query($conn, "SELECT * FROM autor ");


$query1=mysqli_query($conn, "SELECT * FROM genero ");


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
   
    <form id="formulario01" method="POST" action="../controlador/crear_libro.php" enctype="multipart/form-data">




    <!--autor -->
    <div style="width: auto ; margin: 0 auto;">
    <center>
        <select name="autor" id="nombre" style="width: 100%; ">
            <?php
            while($datos = mysqli_fetch_array($query)){

           
            ?>
            <option  value="<?php echo $datos['aut_codigo']; ?>"><?php echo $datos['aut_nombre']." ".$datos['aut_apellido']; ?></option>
            <?php
            }

            ?>
        </select>
    </center>

    </div>

<!----------------------------------------->

    <!--autor -->
    <div style="width: auto ; margin: 0 auto; border: 1px solid #FCC;">
    <center>
        <select name="categoria" id="nombre" style="width: 100%; ">
            <?php
            while($datossss = mysqli_fetch_array($query1)){

            
            ?>
            <option value="<?php echo $datossss['gen_codigo']; ?>"><?php echo $datossss['gen_nombre']; ?></option>
            <?php
            }

            ?>
        </select>
    </center>

    </div>

<!--------------------------------------------->



    



    <br>
        
        <input type="text" id="ISBN" name="ISBN" value="" placeholder="Ingrese el número de ISBN ..." required />
        <br>
       
        <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el titulo
..." required />
        <br>

    
        <input type="text" id="stock" name="stock" value="" placeholder="Ingrese la cantidad de libros
..." required />
        <br>


        <input type="text" id="precio" name="precio" value="" placeholder="Ingrese el precio por unidad ..." required />
        <br>

        <input type="text" id="observaciones" name="observaciones" value="" placeholder="Ingrese observaciones del libro   
..." required />
        <br>
  <!--    <label for="fecha">Fecha Nacimiento (*)</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" placeholder="Ingrese su
fecha de nacimiento ..." required />
        <br>
        -->  
  
        <input type="text" id="resumen" name="resumen" value="" placeholder="Ingrese el resumen
..." required />


     
        <input type="text" id="novedad" name="novedad" value="" placeholder="Ingrese una novedad del texto..." required />
     
        <input type="text" id="idioma" name="idioma" value="" placeholder="Ingrese el idioma del texto..." required />
       
        <input type="text" id="editorial" name="editorial" value="" placeholder="Ingrese la editorial..." required />

        <input type="text" id="paginas" name="paginas" value="" placeholder="Ingrese el numero de paginas..." required />
       
        <input type="text" id="anio" name="anio" value="" placeholder="Ingrese el anio de publicacion..." required />
      
        <input type="file" name="imagen"  required/>
        <br>
        
        <input type="submit" id="Crear" name="crear" value="Aceptar" />
        <button><a href='productos_admin.php' style="text-decoration: none">Cancelar</a></button>
    </form>

    </section>


</body>

</html>