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
		error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
		
			// mostramos el array recibido
		      
		if (isset($_GET['mi_var_array'])){
		    $a=stripslashes ($_GET['mi_var_array']);//Quita las barras de un string con comillas escapadas.
		    $mi_array=unserialize($a);//toma una variable sencilla serializada y la la convierte de nuevo a su valor PHP.
		    foreach ($mi_array AS $clave => $valor){     
		             echo "$clave --->> $valor <br>";
		    }//end foreach
		}else{
			echo "error ....";
		}           
		  

 ?>