<?php 
	//un array
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	$matriz1= array(0 => 'cero',1=>'uno',2=>'dos',3=>'tres');/*array de indices numericos explicitos*/
	$matriz2= array('0' => 'cero','1'=>'uno','2'=>'dos','3'=>'tres','4'=>'cuatro');
	$matriz3= array('name' => 'omar','lastname'=>'gonzales','age'=>'20','dni'=>'45645121','email'=>'omar@gmail.com');
	$matriz4= array('name'=>'erick','lastname'=>'gonzales','age'=>'21','email'=>'erick@viunex.com');/*indices literales*/
	$matriz5= array('gloria','davalos','40','gloria@viunex.com');/*indices numericos por default*/
	$matriz5=['gloria','davalos','40','gloria@viunex.com'];// forma aceptada a partir de PHP 5.4
	$cadena="esta es una cadena muy cortita..jeje";

	/*
		IMPRIMIENDO ARRAYS
		1era forma: var_dump()
		2da forma: print_r()
	*/
		echo "<br/>IMPRIMIENDO con var_dump()<br/>";
		var_dump($matriz1);
		echo "<br/>IMPRIMIENDO con print_r()<br/>";
		print_r($matriz1);

	/*bucle for(){}*/
	$i=0;
	$length=strlen($cadena);//obtengo la longitud de la cadena
	for($i;$i<$length;$i++){
		echo "<br/>\$cadena[".$i."]=>\n".$cadena[$i];
	}
	print "<br/>";
	$i=0;
	for($i;$i<10;$i++){
		print "<br/>\$matriz1[".$i."]=>\n".$matriz1[$i];
	}
	print "<br/>";
	/*bucle while(){}*/
	$i=0;
	while($i<10){
		echo "<br/>\$matriz2[".$i."]=>\n".$matriz2[$i];
		$i++;
	}
	print "<br/>";

	/*bucle do{}while()*/
	$i=0;
	do{
		echo "<br/>\$matriz3[".$i."]=>".$matriz3[$i];//no imprime loesperado pues los indices de este array son no-numericos
		$i++;
	}while($i<10);
	print "<br/>";
	/*bucle foreach*///resulta ser la forma mas efectiva de iterar sobre un array
	foreach ($matriz5 as $value) {//1era forma de uso del foreach
		echo "<br/>\$value: ".$value;
	}
	print "<br/>";

	foreach($matriz5 as $key => $value){//2da forma de uso del foreach
		echo "<br/> \$key $key : $value";//esto es igual a "<br/> \$key ".$key." : ".$value;
	}
	
	print "<br/>";
	foreach($matriz4 as $key => $value){//2da forma de uso del foreach
		echo "<br/> $key : $value";
	}
 ?>