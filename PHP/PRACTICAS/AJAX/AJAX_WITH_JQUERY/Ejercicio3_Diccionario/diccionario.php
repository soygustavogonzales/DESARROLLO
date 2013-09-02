<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="estilos_letras.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery||document.write('<script src="../cdn_jquery/jquery-1.9.1.min.js"><\/script>')</script>

	<style>
	*{margin:0 auto;border: 0; padding: 0}
	body{
		background: #E7E7DE;
	}
	#web{
		width: 95%;
		height: 800px;
		margin:0 auto;
		font-family: 'Verdana' arial sans-serif;
	}

		aside,section#contenido{
			display: inline-block;
			border: 2px solid #413E30;
			border-radius: 8px;
			-webkit-box-sizing:border-box;
			-moz-box-sizing:border-box;
			-ms-box-sizing:border-box;
			box-sizing:border-box;
		}
		h4{
			font-weight: 500;
			color: #434343;
			font-style: bold;
		}
		aside{
			width: 20%;
		}
		aside>p{
			border: 1px solid #40412E;
		}
		#container{
			height: 24%;
		}
		section#contenido{
			background: #1C241F;
			width: 70%;
			color: #EDEDEB;
		}
		input[type=button]{
			background: #2D88E3;
		}
		input[type=button]:hover{
			cursor:pointer;
		}
	</style>
	<script>
		$(document).on('ready',function(){
				var contenido=$('section#contenido');
				contenido.css({
					'position':'relative',
					//'top':'+=20px',
				})
			$('input[type=button]').on('click',function(){
				/*
					this: Objeto nodo de javascript que provoco el evento click llamando a la funcion anonima
					$(this):Objeto nodo de Jquery  que provoco el evento click llamando a la funcion anonima.
				*/
				self=$(this);//este this hace referencia al objeto input de type=button(sobre el que se dio el click) que fue el que llamo a la funcion anonima
				contenido.animate({
					height:'100%',
					//width:'100%',
				},500,function(){
					//si utilizara this aqui, me haria referencia al objeto nodo contenido que ejecuta la actual funcion anonima.
					//console.log(self);
					var link=self.data('link');//obtendo el valor del atributo data-link del objeto nodo especifico
					console.log('link : '+link);
					
					switch(link) {
						case 'a.html':
							contenido.load(link+' section.Entrada',function(){
							console.log("Se cargo "+link);
							});
						break;
						case 'b.json':
						
								console.log("msj1: "+typeof(data));
							$.getJSON(link,function(data){
								//data :Son los datos que se recuperan del archivo .json
								console.log(data);
								console.log("msj1: "+typeof(data));
								$.each(data,function(index,value){
									var html="<section class='Entrada'>";
									html+="<h3 class='palabra'>"+value['palabra']+"</h3>";
									html+="<span class='tipo-palabra'>"+value['tipo-palabra']+"</span>";
									html+="<article class='definicion'>"+value['definicion']+"</article>";
									//html+="<ul class='oracion'>"+value['oraciones']+"</ul>";
									html+="</section>"
									contenido.append($(html));
								});
							});//end getJSON
							console.log("Se cargo "+link);

							break;
						default:
						console.log("Archivo no identificado");

				};//end switch
					
				});//end animate				
			});
			$()
		});
	</script>
</head>
<body>
	<div id="web">
		<section id="container">
			<aside>
				<p class="consonante">
					<h4>LETRA A</h4>
					<input type="button" value="VER" data-link="a.html">
				</p>
				<p class="consonante">
					<h4>LETRA B</h4>
					<input type="button" value="VER" data-link="b.json">
				</p>
				<p class="consonante">
					<h4>LETRA C</h4>
					<input type="button" value="VER" data-link="h3">
				</p>
				<p class="consonante">
					<h4>LETRA D</h4>
					<input type="button" value="VER" data-link="h4">
				</p>
			</aside>
			<section id="contenido">
			</section>
		</section>

	</div>
</body>
</html>

