<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href=""/>
	<script></script>
	<style>
		.rpta{
			color:#3110CD;
			font-size: 18px;
			font-style: italic;
			font-family: Arial,verdana;
			font-weight: 500;
		}

	</style>
</head>
	<body>
		<?php 
			error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

		 ?>
		<fieldset>
			<legend>Calcular</legend>
			<form action="procesador.php" method="get">
				<label for="">Cantidad 1</label><input type="text" name="cant1_txt">
					<br/>
				<label for="">Cantidad 2</label><input type="text" name="cant2_txt">
					<br/>
				<select name="operacion_slt" id="operacion_slt">
					<option value="sumar">sumar</option>
					<option value="restar">restar</option>
					<option value="multiplicar">multiplicar</option>
					<option value="dividir">dividir</option>
				</select>
					<br/>
					<?php 
						if($_GET['rpta_']){
							echo "<label class='rpta'>Respuesta = ".$_GET['rpta_']."</label>";
						}else{
							echo "<label class='rpta'> Aun No hay respuesta</label>";

						}
		
					 ?>
					<br/>



				<input type="submit" value="CALCULAR !!">

			</form>
		</fieldset>
	</body>
</html>