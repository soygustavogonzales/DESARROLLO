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
			var links=$('#menu>a'),linkActual=null,$pictures,$title=$('title'),$image=$('#container img');
			$.ajax({
				url:"pictures.xml",
				success:function(data){
					$pictures=$("picture",data);

				}
			});
			



			
			links.on('click',function(e){
				e.preventDefault();//prevengo el trigger por defecto
				if(linkActual && linkActual.className){$(linkActual).removeClass('active');};//elimino la clase .active(resalta un boton luego de ser seleccionado)
				linkActual = this;//el link seleccionado actual
				
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

