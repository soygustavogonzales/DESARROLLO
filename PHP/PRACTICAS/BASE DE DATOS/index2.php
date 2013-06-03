<?php 
	$conexion=new mysqli("localhost","vonsaturno","matadorg1","enterprise");
	print_r($conexion);
	/*Verificar conexion*/
	if($conexion->connect_errno){
		echo "no conecta";
		exit();
	}else{
		echo "si conecta";
		$consulta="select * from empleados";
		$resultado=$conexion->query($consulta);
		$row = $resultado->fetch_assoc();
		print_r("<br>".count($row));
		while ($row = $resultado->fetch_assoc()) {
			
				echo "<br> ".$row['nombre']."-".$row['apellido_p']."-".$row['apellido_m']."-".$row['cargo'];

		}

		echo $row[0];
	}
	
 ?>