<?php

include('func.php');

if(isset($_GET['noticia']))
{
	if(!empty($_GET['noticia']))
	{
		$id_noticia = (int) mysql_real_escape_string($_GET['noticia']);
		
		$query_noticias = mysql_query('SELECT titulo, fecha, texto FROM '.$db_table.' WHERE id='.$id_noticia.' LIMIT 1');
		
		if(mysql_num_rows($query_noticias) > 0)
		{
			while($columna = mysql_fetch_assoc($query_noticias))
			{
				echo '
					<article>
					<p class="titulo">'.$columna['titulo'].'</p>
					<p class="fecha">'.$columna['fecha'].'</p>
					<div class="contenido">'.$columna['texto'].'</div>
					</article>';
			}
		}
		else
		{
			echo 'La noticia no existe';
		}
	}
	else
	{
		echo 'Debes seleccionar una noticia';
	}
}
else
{
	$query_noticias = mysql_query('SELECT * FROM '.$db_table.' ORDER BY fecha DESC');
	$limite = 3;
	while($columna = mysql_fetch_assoc($query_noticias))
	{
				echo '
					<article>
					<p class="titulo">'.$columna['titulo'].'</p>
					<p class="fecha">'.$columna['fecha'].'</p>
					<div class="contenido">'.$columna['texto'].'</div>
					<p class="leerMas"><a href="?noticia='.$columna['id'].'">Leer más</a></p>
					</article>';
	}
}

?>