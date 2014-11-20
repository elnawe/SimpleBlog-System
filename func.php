<?php

// Conectando a la base de datos

$db_host= "localhost";
$db_name= "pblog";
$db_user= "root";
$db_password = "";
$db_table = "noticias";
$conexion = mysql_connect($db_host, $db_user, $db_password) or die ('No se pudo realizar la conexión a la base de datos');

mysql_select_db ($db_name, $conexion);

?>