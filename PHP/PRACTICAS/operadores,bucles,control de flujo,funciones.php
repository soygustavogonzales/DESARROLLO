<?php 
	$valor_boolean=true;
	if($valor_boolean)//si es true
		{metodo1();}//ejecuta esta linea
	else{metodo2();};//si es false ejecuta esta otra.
	$resultado=($valor_boolean)?//si es true
	metodo1()://ejecuta esta linea
	metodo2();//si es false ejecuta esta otra.
	echo $resultado;
	function metodo1(){
		echo "<br/>\$valor_boolean es TRUE";
	}
	function metodo2(){
		echo "<br/>\$valor_boolean es FALSE";
	}
	echo "<br/>";
	var_dump((bool) "");//evalua como sera tratada en el caso de una condicion 
	echo "<br/>";
	var_dump((bool) 1);
	echo "<br/>";
	var_dump((bool) 0);
	echo "<br/>";
	var_dump((bool) array());

	$a=5;
	$b=null;
	$c=$b=$a;
	echo "<br/> \$c = ".$c."<br/>".
				"\$b = ".$b."<br/>".
				"\$a = ".$a."<br/>" ;
	$d=++$a;//1ero $a aumenta en 1 y luego se es asignado a $d.
	echo "<br/> \$d = ".$d;
	$e=$b++;//1ero asigno a $e y luego $b independientemente aumenta en 1
	echo "<br/> \$e = ".$e;
	$f=$b+=1;//<no es igual q> $f=$b++
	echo "<br/> \$f = ".$f;
	$h='5';
	echo "<br/>\$h + 5 = ".($h + 5);
	function igualdad_identidad($tipo,$valor1,$valor2,$resultado=true){
		switch($tipo){
			case 'iguales':
				echo "<br/> $valor1 == $valor2 :$resultado";
				break;	
			case 'identicos':
				echo "<br/> $valor1 === $valor2 : $resultado";
				break;
		}
	}
	($h==5)?igualdad_identidad('iguales',$h,5,true):igualdad_identidad('iguales',$h,5,false);
	($h===5)?igualdad_identidad('identicos',$h,5,true):igualdad_identidad('identicos',$h,'5',false);

 ?>