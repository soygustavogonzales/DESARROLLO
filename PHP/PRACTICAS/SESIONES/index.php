<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<style>
		*{margin:0; border:0;padding: 0; box-sizing:border-box;}
		#web{
			width: 90%;
			font-size: 18px;
			font-family:'Verdana',arial,sans-serif;

		}
		fieldset{
			width: 80%;
			height: auto;
			margin: 0 auto;
			border: 2px solid #434343;
		}
		fieldset>legend{
			font-size: 20px;
			text-align: center;
		}
		fieldset>form{
		}
		fieldset>form>input.text{
			display: block;
			border: 1.5px solid #434343;
			border-radius: .2em;
			margin:0 auto;
			margin-top: 10px;
		}
		fieldset>form>input.btn{
			margin:10px 50%;
			color: #434343;
			width: 80px;
			padding: .2em;
			cursor: pointer;
			background: #FF7777;
			box-shadow: 1px 1px 2px #434343;
		}
		.Aviso{
			background: #FF7777;
			color: black;
			font-size: 25px;
			display: block;
			text-align: center;
		}

	</style>
	<script src=""></script>
</head>
<body>
<?php 
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
 ?>
	<div id="web">
		<fieldset>
			<legend>Loggin</legend>
			<form name="loggin_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
				<input class="text" type="text" name="usuario_txt">
				<input class="text" type="text" name="password_txt">
				<input class="btn" type="submit" name="submit_btn" >
				<?php 
					if($_GET['error']=="si"){
						echo "<span class='Aviso'>Verifica tus datos</span>";
					}else{
						echo "<span class='Aviso'>Introduce tus datos</span>";
					}
				 ?>
			</form>
		</fieldset>

	</div>
</body>
</html>

