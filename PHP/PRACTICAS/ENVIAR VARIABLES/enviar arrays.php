
<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src=""></script>
</head>
<body>
	<div id="web">
		<?php
				/*
		Para entender el serialize: Serialización no es más que convertir y/o comprimir una 
		instancia de una clase 	en un formato fácil de leer tanto para máquinas como para humanos
		En la mayoria de los casos al mostrar un objeto en pantalla q previamente ah sido 
		serializado no sera muy entendible para el humano. "El resultado es fácil de leer para las 
		máquinas pero realmente no para las personas".
		El objetivo de la serializacion es dar un lote de datos mas facil de manejar y procesar
		a la computadora. 

		*/

				error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);  //evita q se muestren los warning y las noticias en el documento
				// Creamos un array
				$mi_pasa_array=array('cero','uno','dos','tres','cuatro','cinco','&');
				$compactada=serialize($mi_pasa_array);// Serializa en decir Genera una representación almacenable de un valor.
				$compactada=urlencode($compactada);//codifico los caracteres extraños que pueden estar en el array como el & q podria confundir al interprete de php.        
				echo "<a href='recibir arrays.php?mi_var_array=$compactada'>Enviar array de valores</a>";
		?>
	</div>
</body>
</html>

