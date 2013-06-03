<?php 
	$a=2;
	$b=4;
	$c=6;
	$d=8;
	$e=10;
	function metodo(){
		//las variables creadas fuera de este metodo no tiene ningun ambito aqui, si no se les coloca la palabra 'global'.
	global $c;//con global hago q $c sea global y conserve su valor como tal.
		echo "</br>dentro del metodo";
		$b=1;//creo una nueva variable $b
		$a=$b+4;
		$e;

		echo "<br/>\$a vale: ".$a;
		echo "<br/>\$b vale: ".$b;
		echo "<br/>\$c vale: ".$c;
		echo "<br/>\$d vale: ".$d;//vale 0 dentro del ambito de esta funcion pues no se declaro como global
		echo "<br/>\$e vale: ".$e+1;
	}
	metodo();
	echo "</br>fuera del metodo";
	echo "</br> \$b vale: ".$b;
 ?>