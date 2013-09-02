<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery||document.write('<script src="../cdn_jquery/jquery-1.9.1.min.js"><\/script>')</script>
	<script>
		$(document).on('ready',function(){
			$('#menu>a').on('click',function(evento){
				evento.preventDefault();//para evitar la accion por default del <a>
				//this.href+' img'
				$('#container').load(this.href+' img',function(){
					console.log("Se cargo un nuevo documento");
				});
			});
		});
	</script>
</head>
<body>
		<h1>Gallery</h1>
	<div id="web">
		<section id="container">
			<p>
				<img id="imagen" src="img/psj1.jpeg" alt="">
			</p>
			<p class="caption">
				Paisaje1
			</p>
		</section>
		<p id="menu">
			<a href="paisaje2.html">Paisaje2</a>
			<a href="paisaje3.html">Paisaje3</a>
			<a href="paisaje4.html">Paisaje4</a>
		</p>

	</div>
</body>
</html>

