<?php
	if(isset($_GET["enviar_btn"])){
		echo "Formulario enviado por metodo get,<br/> Los datos son:".$_GET["name_txt"]." y ".$_GET["psw_txt"];
	}else if(isset($_POST["enviar_btn"])){
		echo "Formulario enviado por metodo post,<br/> Los datos son:".$_POST["name_txt"]." y ".$_POST["psw_txt"];
	}
?>