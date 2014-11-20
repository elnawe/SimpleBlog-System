<?php

include('func.php');

if(isset($_POST['enviar']))
{
	$titulo = mysql_real_escape_string($_POST['titulo']);
	$texto = mysql_real_escape_string($_POST['texto']);
	
	if(!empty($titulo) && !empty($texto))
	{
		$query_NuevaNoticia = mysql_query('INSERT INTO '.$db_table.' SET titulo ="'.$titulo.'", fecha=NOW(), texto="'.$texto.'"');
		
		if($query_NuevaNoticia)
		{
			echo 'La noticia fue enviada correctamente.';
		}
		else
		{
			echo 'La noticia no pudo ser enviada. Hubo un <b>error</b> en el proceso.';
		}
	}
}
?>
<html>
<head>
<script>
function goBack() {
    window.history.back()
}
</script>
</head>
<body>
<button onclick="goBack()">Volver</button>
</body>
</html>