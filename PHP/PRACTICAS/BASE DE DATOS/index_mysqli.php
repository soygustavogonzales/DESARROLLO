<?php 
	$conexion=new mysqli("localhost","vonsaturno","matadorg1","enterprise");
	//print_r($conexion);
	/*Verificar conexion*/
	if($conexion->connect_errno){
		echo "no conecta";
		exit();
	}else{
		echo "si conecta";
		$consulta="select * from empleados";
		$resultado=$conexion->query($consulta);
		/***Descomentar el contenido comentado para analizarlo
			print_r($resultado);
			$row = $resultado->fetch_assoc();//representa a la 1era tupla resultante
			print("<br>".count($row));//imprimo el numero de elementos del array
			var_dump($row);//imprime al array
		*/
		while ($row = $resultado->fetch_assoc()) {
			
				echo "<br> ".$row['nombre']."-".$row['apellido_p']."-".$row['apellido_m']."-".$row['cargo'];

		}

		//echo $row[0];
		//echo $row[1];
		/***********************************/
		print "<br/>";
		$consulta = "select * from clientes LIMIT 0,30";
		$resultado2=$conexion->query($consulta);
		$row_=$resultado2->fetch_assoc();
		$cabecera="";$tupla1="";
			foreach ($row_ as $key => $value) {
				$cabecera = $cabecera."\t$key";
				$tupla1 = $tupla1."\t$value";
			}
			//echo "<br/>";		
			echo "<br/>".$cabecera;
			echo "<br/>".$tupla1;
			echo "<br/>";
		while ($row = $resultado2->fetch_assoc()) {
			foreach ($row as $value) {
				echo "\t$value";
			};
			print "<br/>";
		}
	}
	
 ?>