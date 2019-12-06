<?php
session_start();
if (isset($_SESSION['isLogged'])) {
  if ($_SESSION['usu_rol'] == 'admin') {
    header("Location: ../../admin/vista/index_admin.html");
  }
}
include '../../config/conexionBD.php';
    $sqlcalificacion = "SELECT * FROM calificaciones c, libro l WHERE c.lib_id=" . $_GET['codProducto']. " AND c.lib_id = l.lib_codigo AND c.cal_id_usu = " . $_SESSION["usu_codigo"] . ";";
    $sqlcalificacion = $conn->query($sqlcalificacion);
    if($sqlcalificacion->num_rows > 0){
        $row = $sqlcalificacion->fetch_assoc();
        $sqldelete = "DELETE FROM calificaciones WHERE cal_codigo=".$row['cal_codigo'].";";
        $conn->query($sqldelete);
       
    }else{
        $sqlInsert = "INSERT INTO calificaciones ( 
            cal_valor,
            lib_id,
            cal_id_usu) 
            VALUES (  
            1,
            " . $_GET['codProducto'] . ", 
            " . $_SESSION['usu_codigo']  . "
        );";
        $conn->query($sqlInsert);
     
    }
$sqlcalificacion = "SELECT * FROM calificaciones c, libro l WHERE c.lib_id=" . $_GET['codProducto'] . " AND c.lib_id = l.lib_codigo AND c.cal_id_usu = " . $_SESSION["usu_codigo"] . ";";
$sqlcalificacion = $conn->query($sqlcalificacion);
if($sqlcalificacion->num_rows > 0){
    ?>
    <a><i class="fas fa-heart" onclick="darLike(this<?php echo (', '.$_GET['codProducto'] )?>)"></i></a>
    <?php
}else{
    ?>
    <a><i class="far fa-heart" onclick="darLike(this<?php echo (', '.$_GET['codProducto'] )?>)"></i></a>
    <?php
}
$sqllike = "SELECT SUM(c.cal_valor) as valor FROM libro l, calificaciones c WHERE c.lib_id = l.lib_codigo AND l.lib_codigo =" . $_GET['codProducto']. ";";
$resultlike = $conn->query($sqllike);
$sqlcalificacion = $resultlike->fetch_assoc();
?>
<span><?php echo $res = ($sqlcalificacion["valor"]  > 0) ? $sqlcalificacion["valor"] : 0; ?></span>
<textarea placeholder="Agregar comentario" name="comentario" id="comentario"></textarea> 
<input type="button" value="Agregar Comentario" onclick="comentar(<?php echo $sqllibro['lib_codigo'] ?>)">
