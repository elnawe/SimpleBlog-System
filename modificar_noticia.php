<?php
include('func.php');

$query_MostrarTitulo = mysql_query('SELECT id, titulo, fecha FROM '.$db_table.'');

while($columna_MostrarTitulo = mysql_fetch_assoc($query_MostrarTitulo))
{
	echo '<a href="?noticia='.$columna_MostrarTitulo['id'].'">'.$columna_MostrarTitulo['titulo'].'</a><br />';
}

?>