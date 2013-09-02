<?php 
if(isset($_POST)){
	if(isset($_POST['query'])){//se trata de un JSON
		$query=$_POST['query'];//JSON en formato cadena 
		$job=$query;

		/***TRABAJANDO CON LA BASE DE DATOS : 'test'*****************************/
		/*
		*/
			$conexion= new mysqli("localhost","vonsaturno","matadorg1","test");
			if($conexion->connect_errno){
				 echo "no se conecta";
				exit();
			}else{
				//echo "si se conecta";
					$consulta = "SELECT nombre_puesto FROM puestos WHERE id_job_puesto = (SELECT id_job FROM vacante WHERE nombre_job = '$job');";
					$resultado=$conexion->query($consulta);
					$matriz=array();$i=0;
					while($row=$resultado->fetch_assoc()){
						$matriz[$i]=$row['nombre_puesto'];
						$i++;
					}
					$json=json_encode($matriz);
					sleep(2);
					echo $json;
			}
		
	}else{//se trata de parametros serializados(key=value&key2=value2&...), lo comun de POST en PHP
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$ocupation = $_POST['ocupation'];

		echo $name
			."\n".$lastname
			."\n".$age
			."\n".$ocupation;
	}
	
}else{
	echo "Error de envio, post no found";
}


 ?>