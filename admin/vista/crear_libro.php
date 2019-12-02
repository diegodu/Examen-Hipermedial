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

        <label for="ISBN">Isbn (*)</label>
        <input type="text" id="ISBN" name="ISBN" value="" placeholder="Ingrese el número de ISBN ..." required />
        <br>
        <label for="titulo">titulo (*)</label>
        <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el titulo
..." required />
        <br>

        <label for="stock">stock (*)</label>
        <input type="text" id="stock" name="stock" value="" placeholder="Ingrese la cantidad de libros
..." required />
        <br>

        
        <label for="precio">precio (*)</label>
        <input type="text" id="precio" name="precio" value="" placeholder="Ingrese el precio por unidad ..." required />
        <br>


        <label for="observaciones">observaciones (*)</label>
        <input type="text" id="observaciones" name="observaciones" value="" placeholder="Ingrese observaciones del libro   
..." required />
        <br>
  <!--    <label for="fecha">Fecha Nacimiento (*)</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" placeholder="Ingrese su
fecha de nacimiento ..." required />
        <br>
        -->  
        <label for="resumen">resumen (*)</label>
        <input type="text" id="resumen" name="resumen" value="" placeholder="Ingrese el resumen
..." required />


        <br>
        <label for="novedad">novedad (*)</label>
        <input type="text" id="novedad" name="novedad" value="" placeholder="Ingrese una novedad del texto..." required />
        <br>
        <label for="idioma">idioma (*)</label>
        <input type="text" id="idioma" name="idioma" value="" placeholder="Ingrese el idioma del texto..." required />
        <br>
        <label for="editorial">editorial(*)</label>
        <input type="text" id="editorial" name="editorial" value="" placeholder="Ingrese la editorial..." required />
        <br>
        <label for="paginas">paginas(*)</label>
        <input type="text" id="paginas" name="paginas" value="" placeholder="Ingrese el numero de paginas..." required />
        <br>
        <label for="anio">anio(*)</label>
        <input type="text" id="anio" name="anio" value="" placeholder="Ingrese el anio de publicacion..." required />
        <br>

        <label for="imagen">Ingresar imagen(*)</label>
        <input type="file" name="imagen"  required/>
        <br>
        
        <input type="submit" id="Crear" name="crear" value="Aceptar" />
        <button><a href='productos_admin.php'>Cancelar</a></button>
    </form>

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