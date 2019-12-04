<?php

 $db_servername = "us-cdbr-iron-east-05.cleardb.net";
 $db_username = "b93979de55c556";
 $db_password = "3efa1ec0";
 $db_name = "heroku_45fa3d31db2575f";

 $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
 $conn->set_charset("utf8");

 # Probar conexión
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }else{
 
 }
?>