<?php 
	//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

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
		echo $rpta;
	}
	elseif($_POST){
		$a=$_POST["cant1_txt"];
		$b=$_POST["cant2_txt"];
		$opt=$_POST["operacion_slt"];
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
		}
		sleep(2);//2 seg.esto lo puse a proposito para que se note la ejecucion del fallback;
		echo $rpta;
		//print "foo";//esto tambien es arrojado(descomentado-claro esta-)
	}
	else{
		echo "NO HAY DATOS CORRECTOS".var_dump($_GET);
	}


 ?>