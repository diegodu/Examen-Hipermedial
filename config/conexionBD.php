<?php

 $db_servername = "remotemysql.com";
 $db_username = "8rF3vDKJrF";
 $db_password = "RC3zx2wKZN";
 $db_name = "8rF3vDKJrF";

 $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
 $conn->set_charset("utf8");

 # Probar conexión
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }else{
 
 }
?>