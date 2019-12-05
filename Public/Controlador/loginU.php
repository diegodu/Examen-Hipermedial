

<?php
session_start();


include '../../config/conexionBD.php';

$usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
$contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

$sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_contrasenia ='$contrasena'";


$result = $conn->query($sql);

echo $result["usu_correo"];

while ($row = $result->fetch_assoc()) {
    $aux = $row["usu_rol"];
    $id = $row["usu_id"];
}


if ($result->num_rows > 0) {
    $_SESSION['isLogged'] = TRUE;

    if ($aux == 'admin') {
        echo " $aux";

        header("Location: ../../admin/vista/index_admin.html");
    }
    if ($aux == 'usuario') {
        $_SESSION['usu']=$usuario;
        $_SESSION['contra']=$contrasena;
        $_SESSION['id']=$id;

        header("Location: ../../admin/vista/usuario/index_admin.php");
    }
} else {
    //header("Location: ../vista/login.php");
}

$conn->close();
?>