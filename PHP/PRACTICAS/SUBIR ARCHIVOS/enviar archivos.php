<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Enviar archivos al servidor</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<style>
		.file{
			border: 2px solid #B1BBBE;
		}
		.file:hover{
			border: 2px solid #EBE170;
		}
	</style>
	<script></script>
</head>
<body>
	<div id="web">
		<form name="upload_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
			<input class="file" type="file" name="file_fls" size="20" value="Escoje">
			<input type="submit" name="upload_btn" value="Upload File!!">
		</form>
	</div>
</body>
</html>

