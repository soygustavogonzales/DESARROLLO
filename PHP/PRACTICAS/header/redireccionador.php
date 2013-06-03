<?php 
//aqui uso el header(), q permite redireccionar a una pagina interna
//o externa y ademas poder pasarle variables por get.
//en este caso este archivo es un intermediario entre el destinatario y el origen(inde.php)
	echo "soy redireccionador.php";
	header('Location: index.php?var=yea');//redirecciona a la pagina index.php  l mandamos una variable llamad: var con valor= yea
		 /*
		 	Notar q estoy redireccionando al propio archivo de origen: index.php
		 	asi tambien le paso la variable var.
		 	Tambien puedo redirecionarlo a otro achivo externo del mismo o diferente dominio.
		 */
 ?>
