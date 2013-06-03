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
			echo "<br/>nombre1= ".$_GET["nombre1"];
			echo "<br/>edad1= ".$_GET["edad1"];
			echo "<br/>nombres= ".$_GET["nombres"];//solo aparecera el primer valor antes del & u otro caracter ,pues php entiende q luego de cada & empieza una nueva variable
			//para el tercer caso se necesita del metodo urlencode().
		 ?>

	</div>
</body>
</html>

