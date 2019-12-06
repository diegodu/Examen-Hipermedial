<?php
session_start();
if (isset($_SESSION['isLogged'])) {
  if ($_SESSION['usu_rol'] == 'admin') {
    header("Location: ../../admin/vista/index_admin.html");
  }
}
include '../../config/conexionBD.php';
    $sql = "SELECT * FROM carrito c, libro l WHERE c.usu_codigo=" . $_SESSION['usu_codigo'] . " AND c.lib_codigo = l.lib_codigo;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sqlSub = "SELECT SUM(l.lib_precio*c.car_cantidad) as subtotal FROM carrito c, libro l WHERE usu_codigo=".$_SESSION['usu_codigo'] ." AND  l.lib_codigo = c.lib_codigo ;";
        $resultSub = $conn->query($sqlSub);
        $rowSub = $resultSub->fetch_assoc();

        $total = $rowSub['subtotal']*1.12;
        $sql = "INSERT INTO facturacabecera( 
            usu_id,  
            fac_ca_subtotal,
            fac_ca_total
            ) VALUES (  
            " . $_SESSION['usu_codigo'] . ", 
            ".$rowSub['subtotal'].",
            ".$total."
        );";
        $conn->query($sql);
    }
        while ($row = $result->fetch_assoc()) {
            $sqlCabCode = "SELECT MAX(fac_ca_id) as cabcode FROM facturacabecera;";
            $sqlCabCode = $conn->query($sqlCabCode);
            $sqlCabCode = $sqlCabCode->fetch_assoc();

            $sqlInsert = "INSERT INTO factura_detalle (
                factura_id, 
                lib_codigo,  
                cantidad) VALUES (  
                " . $sqlCabCode['cabcode']. ", 
                " . $row['lib_codigo'] . ",
                ". $row['car_cantidad'] ."
            );";
            $conn->query($sqlInsert);
        }
        
        $sql = "DELETE FROM carrito;";
        $conn->query($sql);
