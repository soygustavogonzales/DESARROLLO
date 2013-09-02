<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script></script>
</head>
<body>
	<div id="web">
		<?php 
		/*
			empty() //true , si la variable esta definida
			isset() //true, si la varible fue inicializada, se le dio un  valor, por tanto un tipo de valor
		*/
		error_reporting(E_NOTICE ^ E_ALL ^ E_WARNING);
			$a="foo";
			$b;
			$d=null;
			$e=undefined;
			$m=['mama','papa','hijo','tio'];
			$f=false;
			$g=45.67;
			$h=5;

			function Existe($var){
				if(empty($var)){
					echo "<br/>empty($var) : true";
				}else{
					echo "<br/>empty($var) : false";
				}
				if(isset($var)){
					echo "<br/>isset($var) : true";
				}else{
					echo "<br/>isset($var) : false";
				}
			}
			echo "<br/>\$a";
			Existe($a);/*

						empty(foo) : false//no vacia
						isset(foo) : true//si definida

						*/
			echo "<br/>\$m";
			Existe($m);/*
							empty(foo) : false//no vacia
							isset(foo) : true//si definida
						
						*/
			echo "<br/>\$b";
			Existe($b);
						/*
							empty(foo) : true//vacia
							isset(foo) : false//no definicida
						*/
			echo "<br/>\$c";
			Existe($c);/*
							empty(foo) : true//vacia
							isset(foo) : false//no definida
						*/
			echo "<br/>\$d";
			Existe($d);/*
							empty(foo) : true//vacia
							isset(foo) : false//no definida/inicialiada
						*/

			echo "<br/>\$e";
			Existe($e);
						/*
							empty(foo) : false//no vacia
							isset(foo) : true//si definida/inicializada
						*/
		?>
		<?php 
		function tipo($var){
			echo "<br/>";
			if(!is_object($var)){
				echo "<br/> is_array($var) : \t".is_array($var);
				echo "<br/> is_bool($var) : \t".is_bool($var);
				echo "<br/> is_float($var) : \t".is_float($var);
				echo "<br/> is_double($var) : \t".is_double($var);
				echo "<br/> is_real($var) : \t".is_real($var);
				echo "<br/> is_int($var) : \t".is_int($var);
				echo "<br/> is_integer($var) : \t".is_integer($var);
				echo "<br/> is_long($var) : \t".is_long($var);
				echo "<br/> is_object($var) : \t".is_object($var);
				echo "<br/> is_resource($var) : \t".is_resource($var);
				echo "<br/> is_scalar($var) : \t".is_scalar($var);
				echo "<br/> is_string($var) : \t".is_string($var);
				echo "<br/> is_null($var) : ".is_null($var);
				echo "<br/> is_string($var) : \t".is_string($var);

				
				echo "<br/> is_numeric($var) : \t".is_numeric($var);
				echo "<br/> gettype($var) : \t".gettype($var);
			}else{//cuando es un objeto
				
				echo "<br/> is_array(\$var) : \t".is_array($var);
				echo "<br/> is_bool(\$var) : \t".is_bool($var);

				echo "<br/> is_float(\$var) : \t".is_float($var);
				echo "<br/> is_double(\$var) : \t".is_double($var);
				echo "<br/> is_real(\$var) : \t".is_real($var);
				echo "<br/> is_int(\$var) : \t".is_int($var);
				echo "<br/> is_integer(\$var) : \t".is_integer($var);
				echo "<br/> is_long(\$var) : \t".is_long($var);
				echo "<br/> is_object(\$var) : \t".is_object($var);
				echo "<br/> is_resource(\$var) : \t".is_resource($var);
				echo "<br/> is_scalar(\$var) : \t".is_scalar($var);
				echo "<br/> is_string(\$var) : \t".is_string($var);
				echo "<br/> is_null(\$var) : ".is_null($var);
				echo "<br/> is_string(\$var) : \t".is_string($var);
				echo "<br/> is_numeric(\$var) : \t".is_numeric($var);
				echo "<br/> gettype(\$var) : \t".gettype($var);
			}
			
		}
		class miClase{};
		$obj=new miClase();
			//echo "<br/> gettype(\$obj) : \t".gettype($obj);
		$valores=[
			[],//un array
			false,//un buleano
			5,//un entero
			34.5,//un real/double
			"foo",//una cadena
			null,
			undefined,
			$obj
		];
		foreach ($valores as $key => $value) {
			tipo($valores[$key]);
		}


		 ?>
	</div>
</body>
</html>

