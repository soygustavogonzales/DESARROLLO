<?php 
	error_reporting(E_WARNING ^ E_NOTICE ^ E_ERROR ^ E_ALL);
	$a=2;
	$b=4;
	$c=6;
	$d=8;
	$e=10;
	
	echo "<br/>global: \$a vale: $a";
	function metodo(){
		//las variables creadas fuera de este metodo no tiene ningun ambito aqui, si no se les coloca la palabra 'global'.
		global $c;//igual a $c=$_GLOBAL['c'] : de esta forma hago q $c haga referencia al valor de la variable del mismo nombre  global y conserve su valor como tal.
		echo "</br>dentro del metodo";
		$b=1;//creo una nueva variable $b
		$a=$b+4;//como $a no existe dentro de este scope, analizar que si existe fuera de este scope, pero no se le antepuso la palabra reservada global se crea y se asigna
		$e;

		echo "<br/>\$a vale: ".$a;//arroja 5
		echo "<br/>\$b vale: ".$b;//arroja 1
		echo "<br/>\$c vale: ".$c;//arroja 6
		echo "<br/>\$d vale: $d y \$d +8 = $d+8";//aroja error por variable undefined, se entiende q $d vale vacio
		echo "<br/>\$e vale: $e <br/>";//aroja error por variable undefined, se entiende q $e vale vacio
		function sub1metodo(){
			global $a;
			echo "<br/>sub1metodo: \$a vale: $a";//$a vale lo mismo que vale la variable $a global
			echo "<br/>sub1metodo: \$b vale: $b";//error por variable undefined $b        

					function sub2metodo(){
						global $a;
						echo "<br/>sub2metodo: \$a vale $a";//$a vale lo mismo que vale la variable $a global
						echo "<br/>sub2metodo: \$b vale $b";//error por variable undefined  $b
					};
					sub2metodo();
		};
		sub1metodo();
	}
	metodo();
	echo "</br>fuera del metodo";
	echo "</br> \$b vale: ".$b;
 ?>