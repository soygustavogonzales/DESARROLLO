<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>form with ajax</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<style>
		form>*{
			display: block;
		}
		form>label{
			background: rgba(207,207,211,.5);
			min-width:150px;
			height: 1.5em;
			border: 2px solid rgba(207,207,211,.9);
		}
	</style>
</head>
<body>
	<div id="web">
		<form id="f">
			<input type="number" placeholder="#1" name="cant1_txt" data-parameter="true">
			<input type="number" placeholder="#2" name="cant2_txt" data-parameter="true">
			<select name="operacion_slt" id="operacion_slt" data-parameter="true">
					<option value="sumar">sumar</option>
					<option value="restar">restar</option>
					<option value="multiplicar">multiplicar</option>
					<option value="dividir">dividir</option>
			</select>
			RPTA: <label name="rpta" id="rpta" data-parameter="true"></label>
		</form>
			<button id="boton">ENVIAR</button>

	</div>
	<script src="js/extends.min.js"></script>
	<script src="js/exeAJAX.js"></script>
	<script>
	var img=document.createElement('img'),txt=document.createTextNode("");
	img.src="img/loading.gif";
	img.style.display="none";
	img.style.margin="6px auto";
	var boton=document.getElementById('boton'),
	rpta=document.querySelector('#rpta');
	rpta.appendChild(img);
	rpta.appendChild(txt);
	var obj1=new exeAJAX(),oParametros={},form1=window.f,elements=form1.elements,element=null;
		//console.log(elements);
	boton.addEventListener('click',function(){
		
		for(var i= elements.length-1;i>=0;i--){
			element=elements[i];
			//console.log(element.name +" : "+element.value);
			if(element.dataset.parameter){
				oParametros[element.name]=element.value;
			};
		}
		//console.log(oParametros);
		obj1.Pedir({
			method:'POST'
			,pathFile:'procesador.php'
			,asincronus:true
			,queryString:oParametros
			,fallback:function(){/*funcion que se ejecutara mientras carga el pedido y respuesta*/
				rpta.style.background="rgba(207,207,211,.5)";
				rpta.removeChild(txt);
				img.style.display="block";
				console.log("fallback ejecutado");
			}
			,callback:function(request){/*funcion que hara uso de la respuesta */
				
				img.style.display="none";
				txt.textContent=(request.responseText);
				rpta.appendChild(txt);
				/****Estilos para el elemento de respuesta*/
				rpta.style.background="rgba(238,98,30,1)";
				console.log("callbak ejecutado");
			}
			,contentType:"application/x-www-form-urlencoded"
		});
	},false);
	</script>
</body>
</html>

