<?php
session_start();
if (isset($_SESSION['isLogged'])) {
  if ($_SESSION['usu_rol'] == 'admin') {
    header("Location: ../../admin/vista/index_admin.html");
  }
}

if (isset($_GET['codigoproducto'])) {
  include '../../config/conexionBD.php';
  $sql = "SELECT * FROM carrito WHERE 
    lib_codigo=" . $_GET['codigoproducto'] . " AND
    usu_codigo=" . $_SESSION['usu_codigo'] . " ;";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cantidad = $row['car_cantidad'] + 1;
    $sql = "UPDATE carrito SET
        car_cantidad ='$cantidad'
        WHERE car_codigo=" . $row['car_codigo'] . ";";
    if ($conn->query($sql)) {
      ?>
      <div style="background-color: greenyellow; width: 300px; padding: 15px; position: fixed; bottom: 25px; right: 25px ; text-align: center; ">
        <p>Producto agregado al carrito</p>
      </div>
    <?php
        } else {
          ?>
      <div style="background-color: red; width: 300px; padding: 15px; position: fixed; bottom: 25px; right: 25px ; text-align: center; ">
        <p>No se ah agregado al carrito11</p>
      </div>
    <?php
        }
      } else {
        $sql = "INSERT INTO carrito (
        car_cantidad, 
        usu_codigo,  
        lib_codigo) VALUES (  
        1, 
        " . $_SESSION['usu_codigo'] . ", 
        " . $_GET['codigoproducto'] . "
    );";
        if ($conn->query($sql)) {
          ?>
      <div style="background-color: greenyellow; width: 300px; padding: 15px; position: fixed; bottom: 25px; right: 25px ; text-align: center; ">
        <p>Producto agregado al carrito</p>
      </div>
    <?php
        } else {
          ?>
      <div style="background-color: red; width: 300px; padding: 15px; position: fixed; bottom: 25px; right: 25px ; text-align: center; ">
        <p>No se ah agregado al carrito22</p>
      </div>
<?php
    }
  }
}
