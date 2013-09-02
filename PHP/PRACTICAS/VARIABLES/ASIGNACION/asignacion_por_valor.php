
		<?php 
			error_reporting(E_WARNING ^ E_NOTICE ^ E_ERROR ^ E_ALL);
			$a=6;
			$a++;
			echo "<br/> \$a : $a";
			$b=$a;//asignacion por valor, $b sera una copia de $a
			$b++;
			echo "<br/> \$b : $b";
			echo "<br/> \$a : $a";
			/*******************************/
			$c=0;
			echo "<br/>\$c = $c";

			function metodo(){
				echo "<br/>in metodo..."
				//global $a;
				$c=&$GLOBALS['c'];
				$c++;
				echo "<br/>\$c++<br/>\$c = $c";
					function sub1metodo(){
						echo "<br/> in sub1metodo...";
						$c=$GLOBALS['c'];
						$c++;
						echo "<br/>\$c = $c";
						function sub11metodo(){
							echo "<br/> in sub11metodo..."
							$c=$GLOBALS['c'];
							echo "<br/>\$c = $c";

						}
						sub11metodo();
					}
					sub1metodo();

				return $c;
			}
			function metodo2(){
				echo "<br/>in metodo2";
				$c=$GLOBALS['c'];
				$c++;
				echo "<br/>\$c++<br/>\$c = $c";

			}
			echo "<br/>in global/out metodo():\$c : ".metodo();
			echo "<br/>in global/post metodo :\$c : $c";
			metodo2();
			echo "<br/>in global/post metodo2 : \$c = $c";

		 ?>

