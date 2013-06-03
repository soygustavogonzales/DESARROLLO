<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Envio de formulario por metodo GET</title>
	<link rel="stylesheet" href=""/>
	<script></script>
	<style>
	</style>
</head>
	<body>
		<div id="web">
			<fieldset>
				<legend>FORMULARIO</legend>
				<form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
					<label>Name: </label><input type="text" name="name_txt">
					<br/>
					<label>Password: </label><input type="password" name="psw_txt">
					<br/>
					<input type="submit" value="enviar-get" name="enviar_btn">
				</form>
			</fieldset>
		</div>
	</body>
</html>