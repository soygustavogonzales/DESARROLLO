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
			if($conexion=mysql_connect("localhost","vonsaturno","matadorg1")){
				mysql_select_db("Enterprise",$conexion);
				$query="select * from Empleados";
				$exec=mysql_query($query,$conexion);
				echo "<br/>".count($query);//arroja el numero de elementos
				echo "<br/>";
				$resultado=mysql_result($exec,0);
				echo $resultado;
			}else{//si no da la conexion
				exit();
			}


		 ?>

	</div>
</body>
</html>

