

<?php
session_start();


include '../../config/conexionBD.php';

$usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
$contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

$sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_contrasenia ='$contrasena'";


$result = $conn->query($sql);

$result = $result->fetch_assoc();

echo $result["usu_id"];

if ($result> 0) {
     if($result["usu_eliminado"] == 'N'){
          $_SESSION['isLogged'] = TRUE;
          $_SESSION['usu_codigo'] = $result["usu_id"];
          $_SESSION['usu_rol'] = $result["usu_rol"];
          $_SESSION['usu_codigo'] = $result["usu_id"];
          $_SESSION['usu_nombre'] = $result["usu_nombre"];
          $_SESSION['usu_apellido'] = $result["usu_apellido"];
          $_SESSION['usu_direccion'] = $result["usu_direccion"];
          $_SESSION['usu_telefono'] = $result["usu_telefono"];
          $_SESSION['usu_correo'] = $result["usu_correo"];
          $_SESSION['usu_contrasenia'] = $result["usu_contrasenia"];
          
      
         header("Location: ../Vista/index.php");

     }else{
          header("Location: ../Vista/login.php"); 
     }

   
  
} else {
     header("Location: ../vista/login.php");
}

$conn->close();
?>