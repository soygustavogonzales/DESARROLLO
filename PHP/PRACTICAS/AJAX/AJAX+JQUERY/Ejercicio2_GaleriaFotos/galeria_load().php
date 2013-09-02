<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		a
		{
			background:rgba(197,198,200,1);
			color: #242B1E;
			width: auto;
			height:250px;
			padding: 5px 8px;
			border-radius: .2em;
			text-decoration:none;

		}
		a:visited{
			color: white;
			/*background: #DD4722;*/
			text-decoration: none;
		}
		a:link{
			color:white;
		}
		a:active{
			color: cyan;
			background:#767968;
		}
		a:hover{
			color: black;
		}

		#web{
			background: rgba(238,237,234,.4);
		}

		.active{/*estilos q tendra la clase el boton(a) seleccionada*/
			background:#4B4B4B;
		}
		img{
			border-radius: 1em;
			border:6px solid #CBCCC4;

		}

	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).on('ready',function(){
			var links=$('#menu>a'),linkActual=null;
			links.on('click',function(e){
				e.preventDefault();
				if(linkActual && linkActual.className){$(linkActual).removeClass('active');};
				linkActual = this;
				var path=linkActual.href+"\u0020img";//ojo que hay un espacio al concatenar la cadena de "[espacio]img", el espacio lo hago con el valor de caracter unicode \u0020 que genera un espacio, mas info en: "http://msdn.microsoft.com/es-es/library/ie/2yfce773(v=vs.94).aspx"
				this.classList.add("active");
				/*
					Aqui viene la parte de ajax
				*/
				$('#container').load(path,function(){//paso la ruta y el contenido de respuesta que venga por ese pedido sera colocado en el elemento con id="#container"
					console.log("Se cargo un paisaje : "+linkActual.textContent);
				});
			});
		});
	</script>
</head>
<body>
	<div id="web">
		<h1>Gallery</h1>
		<section id="container">
			<p>
				<img id="imagen" src="img/psj1.jpeg" alt="">
			</p>
		</section>
		<p id="menu">
			<a href="paisaje1.html">Paisaje1</a>
			<a href="paisaje2.html">Paisaje2</a>
			<a href="paisaje3.html">Paisaje3</a>
			<a href="paisaje4.html">Paisaje4</a>
		</p>
	</div>
</body>
</html>

