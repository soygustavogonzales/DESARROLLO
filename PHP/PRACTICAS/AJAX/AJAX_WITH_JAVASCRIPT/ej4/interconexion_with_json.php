<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Document</title>
	<link rel="stylesheet" href="../stylos/bootstrap/css/bootstrap.min.css">
	<style>
		option.especial{
			color: cyan;
		}
		#img-fallback{
			/*vertical-align: middle;*/
			margin-top: 10px;
			display: none;
		}
	</style>
	<script src="../js/net.js"></script>
	<script src="../js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div id="web">
	<form class="form-horizontal">
		<fieldset>
			<legend>Trabaja con nosotros</legend>
			<div class="control-group">
				<label class="control-label" for="input01">Your name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="input01">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox" id="optionsCheckbox" value="option1">
						Acepto recibir publicidad a mi correo
					</label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="select01">Jobs</label>
				<div class="controls">
					<select id="select01">
						<option>ti</option>
						<option>Proyects</option>
						<option class="especial">Marketing</option>
						<option>Finances</option>
						<option>Magazines</option>
						<option>Management</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="multiSelect">Your position</label>
				<div class="controls" id="positionOpt">
					<img id="img-fallback" src="../img/loading.gif" alt="loading.gif">
					<select multiple="multiple" id="multiSelect">
						<option>Frontend Developer</option>
						<option>Backend Developer</option>
						<option>Architec developer</option>
						<option>Software engineer</option>
						<option>Product design</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="fileInput">Your picture</label>
				<div class="controls">
					<input type="file" class="input-file" id="fileInput">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="textarea">Your profile</label>
				<div class="controls">
					<textarea class="input-xlarge" id="textarea" rows="3"></textarea>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button class="btn">Cancel</button>
			</div>
		</fieldset>
		<script>
		var o = new net.exeAJAX(),
		form=$('.form-horizontal'),
		boton=$('.form-horizontal .btn-primary'),
		name = $('.form-horizontal #input01'),
		aceptPublicity = $('.form-horizontal #optionsCheckbox'),
		Job=$('.form-horizontal #select01'),
		position=$('.form-horizontal select[multiple="multiple"]'),
		positionOpt=document.getElementById('positionOpt'),
		img = positionOpt.querySelector('img');
		//console.log(position.contents());
		//aceptPublicity[0].checked ;//estado del checkbox
		//positionJob.value;//item seleccionado
		Job.on('change',function(){//cuando selecciona otro item
			var job_ = Job[0].value.toString();
			//alert(job_);
					jQuery.ajax({
					  url: 'control.php',
					  type: 'POST',
					  dataType: 'json',
					  data: {query: job_},/*como sera tratado la respuesta devuelta*/
					  beforeSend:function(){
						position[0].style.display="none";//elimino todo su contenido
						img.style.display="block";
					  }
					  ,success: function(data, textStatus, xhr) {
						console.log(data);
						img.style.display="none";
						position[0].style.display="block";//elimino todo su contenido
						position[0].innerHTML="";//elimino todo su contenido
						var df=document.createDocumentFragment();
						for (var i = data.length - 1; i >= 0; i--) {
							var option=document.createElement('option');
							option.textContent=data[i];
							df.appendChild(option);
						};
						position[0].appendChild(df);
					 }
					  ,error: function(xhr, textStatus, errorThrown) {
					    console.log(xhr
					    	+"\n"+textStatus);
					  }
					});

			
		/*
			o.Pedir({
				pathFile:'control.php'
				,queryString:{
					query:{
						job:job_
					}
					,dataType:'JSON'
				}
				,fallback:function(){
					position[0].style.display="none";//elimino todo su contenido
					img.style.display="block";
				}
				,callback : function(request){
					//console.log("callback ejecutado en Job...");
					img.style.display="none";
					position[0].style.display="block";//elimino todo su contenido
					var rpta = request.responseText;
					console.log(rpta);
					position[0].innerHTML="";//elimino todo su contenido
					matriz=JSON.parse(rpta);
					console.log(matriz);
					var df=document.createDocumentFragment();
					for (var i = matriz.length - 1; i >= 0; i--) {
						var option=document.createElement('option');
						option.textContent=matriz[i];
						df.appendChild(option);
					};
					position[0].appendChild(df);
				}

			});
		*/
		});
		var o1 = new net.exeAJAX();
		boton.on('click',function(e){
			e.preventDefault();
			alert(position[0].value);
			o1.Pedir({
				pathFile:'control.php'
				,queryString:{
					query:{
						name:'gustavo'
						,lastname:'gonzales'
						,age:23
						,ocupation:'developer'
					}
					//,dataType:'JSON'
				}
				,callback : function(request){
					var rpta = request.responseText;	
					console.log(rpta);
					/*
					console.log(typeof(rpta))
					var rptaJson = JSON.parse(rpta);
					console.log(typeof(rptaJson))
					console.log(rptaJson)
					*/
				}
			});
		/*
		*/
		});
		</script>
		<script src="../stylos/bootstrap/js/bootstrap.js"></script>
	</div>
</body>
</html>

