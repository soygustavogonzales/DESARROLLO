<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src=""></script>
</head>
<body>
	<?php 
		$pagina="http://www.viunex.com?& &";
		$pagina_encodificada=urlencode($pagina);//codifica una cadena y sus caracteres extraños 
		$pagina_decodificada=urldecode($pagina_encodificada);//decodifica la ccadena a su estado normal.
		echo "<br/>\$pagina = ".$pagina;
		echo "<br/>\$pagina-encodificada = ".$pagina_encodificada;
		echo "<br/>\$pagina_decodificada = ".$pagina_decodificada;	


	 ?>

	<div id="web">
		<a href="destinatario.php?nombre1=gustavo&edad1=22">enviar variables datos1</a>
		<a href="destinatario.php?nombre2=omar&edad2=20">enviar variables datos2</a>
		<a href="destinatario.php?nombres='gloria & gustavo & antenor & erick'">enviar variable nombres</a> 

	</div>
</body>
</html>

