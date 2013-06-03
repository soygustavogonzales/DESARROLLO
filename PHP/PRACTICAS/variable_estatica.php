<?php
	function aumentar(){
		$a=0;
		echo "<br/>".$a;
		$a++;
	}

	function aumentar_static(){
		static $b=0;//declaro una variable estatica,para q conserve su valor una vez culminada su ambito al q pertenece.//esta variable solo esta disponible en el ambito de su funcion.
		echo "<br/>".$b;
		$b++;
	}
	for($i=0;$i<5;$i++){
		aumentar();
	}
	echo "<br/>";
	for($i=0;$i<5;$i++){
		aumentar_static();
	}
	$b++;
	echo "<br/> \$b es: ".$b;
	function recursiva(){
		static $count=0;
		$count++;
		echo "</br> \$count vale: ".$count;
		if($count<10){//si la variable vale menos d 10
			recursiva();//se llama a la misma funcion, metodo denominado recursividad
		}
	}
	recursiva();
?>