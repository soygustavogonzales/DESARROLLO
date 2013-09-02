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
			if(!$_GET){//si $_GET[] NO TIENE CONTENIDO ALGUNO	
				for ($i=0; $i < 10; $i++) { 
					echo '<a href="envia y recibe.php?dato='.$i.'">Envia '.$i.'</a><br/>';//cuando redirige a la misma pagina esta estara limpia pues segun la condicion se pasara al else.
				}
			}else{//SI $_GET[] TIENE ALGUN CONTENIDO DENTRO
				echo $_GET["dato"];//sobre la pagina limpia se escribe
				echo "<br/><a href='envia y recibe.php'>VOLVER</a>";
			}

		 ?>
 	
	</div>
</body>
</html>

