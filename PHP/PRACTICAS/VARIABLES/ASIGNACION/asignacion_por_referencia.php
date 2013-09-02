<?php 
	$a=6;
	echo "<br/>";
	$c=&$a;//asignacion por referencia, $c hace referencia al valor de $a;
	$c+=10;
	echo "<br/> \$c : $c";//arroja 16
	echo "<br/> \$a : $a";//arroja 16

	$a+=20;
	echo "<br/> \$c : $c";//arroja 36
	echo "<br/> \$a : $a";//arroja 36

	function metodo(){
		global $a;
		$a++;
		echo "<br/> \$a : $a";
		function sub1metodo(){
			global $a;
			$a+=10;
			echo "<br/> \$a : $a";
				function sub12metodo(){
					global $a;
					$a+=10;
					echo "<br/> \$a : $a";
				}
				sub12metodo();
				function sub13metodo(){
					global $a;
					$a++;
					echo "<br/> \$a = $a";
				}
				sub13metodo();
		}
		sub1metodo();
		echo "<br/> \$a : $a";

	}
	metodo();
	echo "<br/> \$a : $a";
 ?>