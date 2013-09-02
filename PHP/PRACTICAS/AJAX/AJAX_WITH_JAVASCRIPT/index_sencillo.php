<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
	<title>Hello word with ajax</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script>
		function downloadFile(element){
			//obtener la instancia del objeto XMLHttpRequest
			var peticion_http=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');//normalizo el objeto XMLHttpRequest;
			
			//Realizar peticion HTTP
			peticion_http.open('GET','txt/helloworld.txt',true);
			peticion_http.send(null);
			
			//Preparar la funcion respuesta
			peticion_http.addEventListener('readystatechange',muestraContenido,false);//cuando se reciba alguna respuesta del servidor de disparara el metodo pasado por parametro(muestra contenido)

				function muestraContenido(){
					if(peticion_http.readyState==4){//si se ha recibido respuesta del servidor
						if(peticion_http.status==200){//si esta respuesta es valida y correcta
							var rpta=peticion_http.responseText;//se extrae el contenido del archivo solicitado
							imprimir(element,rpta);
						}
					}
				}
		}
		function imprimir(element,msj){
			element.textContent=msj;//se mostrara el msj dentro del span
		}
	window.addEventListener('load',function(){
		var boton=window.boton;
		var span=document.querySelector('.msj');
		boton.addEventListener('click',function(){
			downloadFile(span);
		},false);
	},false);
	</script>
</head>
<body>
	<div id="web">
		<button id="boton">DOWNLOAD</button>
	</div>
	<div class="aviso">MENSAJE:<span class="msj"></span></div>
</body>
</html>

