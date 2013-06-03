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
		error_reporting(E_ALL ^ E_NOTICE);//para que los avisos y los reportes warning no aparezcan en la pagina

		$capitales="Lima & Buenos Aires";
			if(!$_GET){//si aun no hay contenido en el array $_GET[]
				/*Con urlencode()*/echo "<a href='urlencode.php?capitales=".urlencode($capitales)."'>press me!!</a>";
				/*Con urlencode()*/echo '<a href="urlencode.php?ciudades='.urlencode("Madrid & Barcelona").'">haz click</a>';
				/*Sin urlencode()*/echo "<a href='urlencode.php?provincias=Yauyos & New York'>press me!!</a>";

			}else{//Cuando ya  existe contenido en el array $_GET[]
				echo "<br/>".$_GET["capitales"];
				echo "<br/>".$_GET["ciudades"];
				echo "<br/>".$_GET["provincias"];//notar que el echo de salida no recoje las todo el contenido de $provincias, puesto q el interprete entiene que & separa a lo posterior como si fuese otra variable.
												//Para eso el uso de urlencode().

			}
		 ?>

	</div>
</body>
</html>