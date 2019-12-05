<?php 

    session_start();
    if (isset($_SESSION['isLogged'])) {
        if ($_SESSION['usu_rol'] == 'admin') {
            header("Location: ../../admin/vista/index_admin.html");
        }

    }
   
        
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e564244708.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>

<body>

<?php include "include/header.php"?>
    <section class="somos">
        <img src="../../imagenes/pablo/somos.jpg" alt="">
    </section>

    <section class="somos2">
        <div>
            <h2>Quienes Somos</h2>
            <p>Somos una librería independiente nueva en el mercado.

                Nuestra actividad está vinculada al libro, solo nos debemos a nuestros lectores. Nuestra única meta es
                el libro. Creemos que no siempre ser másgrande es ser mejor, y no siempre hay que crecer para tener
                futuro.
                En el presente hay libros, y en elfuturo también los habrá. El libro es un transmisor de cultura y de
                entretenimiento donde cabe todo, ycada día estamos más convencidos de que es uno de los grandes remedios
                contra las enfermedades sociales:combate la ignorancia, ayuda en la depresión, mejora nuestra percepción
                de la realidad, estimula la imaginación y puede hacer de nosotros mejores personas. Nuestro deseo es que
                siga siendo así que su valor esté por encima de su precio.</p>

            <h2>Mision</h2>
            <p>Titulo es una empresa dedicada a la venta de libros. Abrimos en el año 2019 y desde el primer momento
                tuvimos claro que en Lugo había espacio para una librería de fondo; un lugar en el que el lector pudiese
                buscar
                y, sobre todo, encontrar esos libros que deben estar en las estanterías. Además en nuestra intención
                está hacer
                la vida más agradable a las personas que entran en Trama, tratando de atenderlas lo mejor posible y de
                darles el
                mejor servicio.

                La librería está ubicada en la ciudad de Azogues provincia del Azuay ----direccion--- , en un ambiente
                totalmente seguro
                para que usted no tenga preocupacion si desea venir a nuestro local


                Los que que formamos parte de esta librería somos ante todo lectores; nos gusta leer y que nuestro
                negocio esté totalmente
                enfocado al libro. En este entorno tratamos de hacer que nuestro trabajo diario sea placentero.</p>

            <h2>Vision</h2>
            <p>En estos tiempos tan digitalizados, de relaciones virtuales, que ponen en riesgo nuestros valores
                culturales y literarios, creemos que es de vital importancia fomentar la lectura, de un modo que el
                publico reviva la sensación del contacto directo con las paginas, los libros y el entorno que lo rodea.
                Buscamos posicionamiento en el sector como un nuevo concepto en venta de libros.
                Apostamos a que nuestros clientes y potenciales clientes aprecien nuestros servicios diferenciándonos
                del resto del mercado.
                A largo plazo, vemos nuestra librería como una cadena nacional en distintos puntos del país, para que la
                mayor cantidad de gente posible, pueda acceder a este nuevo concepto en librería.</p>

        </div>
        <figure>
            <img src="../../imagenes/pablo/somos2.jpg" alt="">
        </figure>
           
       



    </section>
    <?php include "include/footer.php"?>
</body>

</html>