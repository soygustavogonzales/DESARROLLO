<?php 

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

	function sumar($a,$b){
		return $a+$b;
	}	
	function restar($a,$b){
		return $a-$b;
	}	
	function multiplicar($a,$b){
		return $a*$b;
	}
	function dividir($a,$b){
		return $a/$b;
	}

	if($_GET){
		$a=$_GET["cant1_txt"];
		$b=$_GET["cant2_txt"];
		$opt=$_GET["operacion_slt"];
		switch ($opt) {
			case 'sumar':
				$rpta=sumar($a,$b);
				break;
			case 'restar':
				$rpta=restar($a,$b);
				break;
			
			case 'multiplicar':
				$rpta=multiplicar($a,$b);
				break;

			default:
				$rpta=dividir($a,$b);
				break;
		}//end switch
		echo "la respuesta es .:. ".$rpta;
		header("Location: calculadora.php?rpta_=".$rpta);
	}
	else{
		echo "NO HAY DATOS CORRECTOS";
	}


 ?>