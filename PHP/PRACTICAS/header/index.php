<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href=""/>
	<style>
		.aviso{
			font-weight: 500;
			font-family: Verdana;
			font-style: italic;
			color:blue;
			font-size: 20px;
		}

	</style>
	<script></script>
	
</head>
	<body>
		<?php 
			echo "SOy INDEX.PHP";
			echo "<br/>Apuntaremos a redireccionador.php";
		 ?>
	 <br/>
	 <a href="redireccionador.php">te vas a redireccionador.php</a>
	 <?php 
		
		if($_GET){
				echo "<br/><span class='aviso'>var = ".$_GET['var']."</span>";
		}
		else{
				echo "<br/><span class='aviso'>Aun no hay valores en get</span> ";
		}

	  ?>
		
	</body>
</html>