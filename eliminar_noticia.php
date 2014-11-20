<?php
include('func.php');

$query_titulos = mysql_query('SELECT id, titulo, fecha FROM '.$db_table.'');

while($columna_titulos = mysql_fetch_assoc($query_titulos))
{
	echo $columna_titulos['titulo'].' - <a href="?noticia='.$columna_titulos['id'].'">Eliminar</a><br />';
}

if(isset($_GET['noticia']))
{
	$id = (int)mysql_real_escape_string($_GET['noticia']);
	$query_eliminar = mysql_query('DELETE FROM '.$db_table.' WHERE id="'.$id.'"');
	
	if($query_eliminar)
	{
		echo 'La noticia se eliminó correctamente';
	}
	else
	{
		echo 'La noticia no se eliminó proque ocurrió un error en el proceso';
	}
}