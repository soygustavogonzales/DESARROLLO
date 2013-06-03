<?php 
	//este seria el tercer archivo php, es aqui donde tambien se podria redireccionar el header()
	//de otro archivo
	echo "SOY DESTINO.php";
	if($_GET){//si el array tiene valores dentro
		echo "<br/>var = ".$_GET['var'];//imprimo el valor de la variable 'var'
	}else{
		echo "<br/>no hay valores en get";
	}


 ?>