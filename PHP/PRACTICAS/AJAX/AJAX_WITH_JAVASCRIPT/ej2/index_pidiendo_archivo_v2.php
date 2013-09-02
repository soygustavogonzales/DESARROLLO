<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src="../js/exeAJAX.v2.js"></script>
	<script>

			var cargador= new net.CargadorContenidos("../txt/helloworld.txt",function(){
				var rpta = this.req.responseText;
				trigger(rpta);
			});
		function trigger(rpta){
			//document.addEventListener('load',function(){
				var boton=(window.boton||document.getElementById('boton')),
				msj=document.querySelector('span.msj');
				boton.addEventListener('click',function(){
					alert(rpta);
					msj.textContent = rpta;
				},false);
			//},false);
		}
	</script>
</head>
<body>
	<div id="web">
		<button id="boton">DOWNLOAD</button>
		<div class="aviso">MENSAJE:
			<span class="msj"></span>
		</div>

	</div>
</body>
</html>

