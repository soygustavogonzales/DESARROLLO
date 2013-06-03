<?php
	//este es un comentario
	/*este es un comentario multilinea*/	
	//imprimiendo
	echo "hello world..";
	echo "<br/><u>estoy muy bien..</u>";//

	//variables
	$variable="hola";
	$variable2="mundo";
	//$8variable="hello";//variable invalida
	//concatenando variables 
	echo "</br>las variables son: "."$variable,$variable2";
	echo ("</br>".$variable." ".$variable2);
	echo "<br/>";
	echo "<div style='height=200px;width=200px;background=red;'>este es un div</div>";//los estilos no se muestran
	
	$num1=12;
	$num2=14;
	echo $num1." + ".$num2." es = ".($num1+$num2);
	echo "</br>el residuo o modulo de ". $num1/2 ." es = ".$num1%2;
	/*Estructuras de flujo*/
	//condicionales
	if($num1==0){
		echo "<br/>es 0";
	}else{echo "<br/>no es 0";}
	
	echo "</br>a continuacion un bucle";

	for($i=0;$i<=10;$i++){
		echo "</br>el valor de i=".$i;
	}

?>
