<?php 
	$a='{"name":"gustavo"}';
	$oPHP=json_decode($a);//AHORA! $json es un objeto que puede ser trabajado por PHP
	echo $oPHP->name;//arrojaria 'gustavo'
	$matriz=['omar','erick','gustavo','antenor','gloria'];
	$tamaño=count($matriz);//numero de elementos de la matriz
	for ($i=$tamaño; $i <$tamaño+5 ; $i++) { 
		$matriz[$i]="octavio".$i;
	}
	$json = json_encode($matriz);
	print "<br/>";
	echo "$json";
	//echo $json->name;
	//echo $a;
 ?>