<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<style>
	body{
		background: rgba(0,0,0,.9);
		color: white;
	}
	span{
		color: cyan;
	}
	#parte2>span{
		color: green;
	}
	</style>
	<script></script>
</head>
<body>
	<div id="web">
		<section id="parte1">
			<?php 
				/*
		En este ejercicio se compara una caracteristica especial de
		la palabra reservada 'global' y  el array asociativo $GLOBALS['a']:
		Si tengo la variable $a=5;aunq puede ser cualqier valor
		$GLOBALS['a'] siempre hara referencia a la variable $a del scope global
		global $a siempre hara referencia a la variable $a del scope superior que la contiene;

				*/
			 ?>
		<?php
			print "<span>*************PARTE 1: global**********</span><BR/>";
			$a=0;
			$matriz=['antenor','gloria','erick','omar','gustavito'];//este es un array
			echo "<span>in global...</span><br/>\$a = $a";
			function metodo1(){
				echo "<br/><span>in metodo1...</span>";
				global $a,$matriz;//hace referencia a la varaible $a del scope superior, osea al $a global.
				$a+=10;
				echo "<br/>\$a = $a";//arroja 1
				var_dump($matriz);//1era forma de imprimir un array(variable escalar)
				function sub11metodo(){
					echo "<br/><span>in sub11metodo...</span>";
					global $a,$matriz;//hace referencia a la variable $a del scope superior osea de metodo1;
					$a++;
					echo "<br/> \$a = $a";//arroja 1
					echo "<br/>";
					print_r($matriz);//2da forma de imprimir un array(variable escalar)
					function sub111metodo(){
						echo "<br/><span>in sub111metodo...</span>";
						global $a;//hace referencia al $a del scope de sub11metodo;
						$a++;
						echo "<br/> \$a = $a";//arroja 1
					}
					sub111metodo();
				}
				sub11metodo();
			}
			metodo1();
			function metodo2(){
				echo "<br/><span>in metodo2...</span>";
				global $a;//hace referencia a la variable $a del scope global
				/*
			NOTA: Analizar que la variable $a del scope global fue modificada varias veces,
				 en las llamadas constantes que se le hizo en los metodos;
				*/
				echo "<br/>\$a = $a";
			}
			metodo2();
	
			$a++;
			echo "<br/><span>in global...</span> : \$a = $a";


		 ?>
		</section>
		<section id="parte2">
			<?php 
			print "<span>*************PARTE 2: \$GLOBALS[]**********</span><BR/>";
					$a=0; 
					echo "<span>in global...</span><br/>\$a = $a";
					function metodo1_(){
						echo "<br/><span>in metodo1_...</span>";
						$a=$GLOBALS['a'];
						//$a=&$a//esto haria simular el efecto de asignacion por referencia causado en la parte 1.
						$a+=10;
						echo "<br/>\$a = $a";//arroja 1
						function sub11metodo_(){
							echo "<br/><span>in sub11metodo_...</span>";
							$a=$GLOBALS['a'];
							$a++;
							echo "<br/> \$a = $a";//arroja 1
							function sub111metodo_(){
								echo "<br/><span>in sub111metodo_...</span>";
								$a=$GLOBALS['a'];
								$a++;
								echo "<br/> \$a = $a";//arroja 1
							}
							sub111metodo_();
						}
						sub11metodo_();
					}
					metodo1_();
					function metodo2_(){
						echo "<br/><span>in metodo2_...</span>";
						$a=$GLOBALS['a'];
						echo "<br/>\$a = $a";
					}
					metodo2_();
					$a=$GLOBALS['a'];//aqui no es necesario llamar al array asociativo $GLOBALS,pues estamos en el scope global.
					$a++;
					echo "<br/><span>in global...</span> : \$a = $a";

			 ?>
			 <?php 
			 	/*
				NOTA:Para simular la estructura de asignacion por referencia que se ve en 
				la parte hecha por el modificador global. se puede hacer lo siguiente:
					Agregar  
						$a=&$a; despues de cada $a=$GLOBALS['a'] de cada scope de los metodos y submetodos;
								lo que sucede es que al agregar el & ('ampersand') hago una asignacion por referencia en
								ves de una asignacion simple por valor.
				NOTA:Cuidado! la asignacion por valor y por referencia tienen sus ventajas
				y desventajas cada uno. Depende del ejercicio y problema, el aplicarse y del programador el
				aprovechar bien estas caracteristicas.
			 	*/
			  ?>
		</section>


	</div>
</body>
</html>

