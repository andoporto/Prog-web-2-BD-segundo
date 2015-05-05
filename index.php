<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$link = @mysql_connect(localhost, 'root');
	mysql_select_db('prueba');

	if  (!$link) {
    	die('No pudo conectarse: ' . mysql_error());
	}
	echo 'Conectado satisfactoriamente<br>';

	$consulta = mysql_query('SELECT * FROM usuario WHERE id > 5 AND id < 20' , $link);
	$fila = mysql_fetch_row($consulta);
		
	while ($fila = mysql_fetch_array($consulta)) 
	{
		echo $fila['id'] . $fila['nombre'] . $fila['clave'] . "<br>";			
	}

	mysql_close($link);
 ?>
</body>
</html>