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

    <?php include "include/header.php" ?>

    <section class="usuPedido">
        <div class="usuTabla">
        <table>
            <tr>
                <th>Pedido</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>Gato Negro</td>
                <td>C</td>
            
            </tr>
            <tr>
                <td>Joker</td>
                <td>F</td>
        
            </tr>
        </table>
        </div>
        

    </section>

    <?php include "include/footer.php" ?>
</body>

</html>