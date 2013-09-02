<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
	<title>Hello word with ajax</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<style>
		body{
			background:rgba(228,120,133,.8);
		}
	</style>
	<script src="js/extends.min.js"></script>
	<script src="js/exeAJAX.js"></script>
	<script>
	//end class
		var obj1=new exeAJAX();
		var obj2=new exeAJAX();
		document.addEventListener('DOMContentLoaded',function(){
			var boton=window.boton,
			msj1=document.querySelector('span.msj1');
			msj2=document.querySelector('span.msj2');
			boton.addEventListener('click',function(){
				obj1.Pedir({
					method:'GET'
					,pathFile:'txt/helloworld1.txt'
					,send:null
					,asincronus:true
					,callback:function(request){
						msj1.textContent=request.responseText;
						console.log("callback ejecutado : "+this.pathFile);
						//return request.responseText;
					}
				});
				obj2.Pedir({
					method:'GET'
					,pathFile:'txt/helloworld.txt'
					,send:null
					,callback:function(){//no hay necesidad de pasarle el parametro
						msj2.textContent=request.responseText;//se debe utilizar el objeto request que ya esta dofenido en el  objeto
						console.log("callback ejecutado : "+this.pathFile);	
						//return request.responseText;
					}
				});
			},false);
		},false);
	</script>
</head>
<body>
	<div id="web">
		<button id="boton">DOWNLOAD</button>
		<div class="aviso">MENSAJE:
			<span class="msj1"></span>
		</div>
		<div class="aviso">MENSAJE:
			<span class="msj2"></span>
		</div>
	</div>
</body>
</html>

