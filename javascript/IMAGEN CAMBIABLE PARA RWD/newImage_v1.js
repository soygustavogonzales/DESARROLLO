
/*
	var alto_browser=window.innerHeight;//el alto del navegador
	var ancho_browser=window.innerWidth;//el ancho del navegador
*/
function Cargar_imagen(id_node,new_file,resolution){
	var image=document.getElementById(id_node);
	//var source=image.src;//esto arroja la ruta completa de la imagen, desde el servidor hasta el ombre y extension del archivo
	var source=image.getAttribute("src");
	console.log("souce of image: "+source);
	var patch_file=source.substring(0,source.lastIndexOf("/")+1);
	var name_file=source.substring(source.lastIndexOf("/")+1);
	new_source=patch_file+new_file;
	image.setAttribute("src",new_source);
	console.log("new source of image: "+new_source);
	
}

//console.time("controller1");
	function Mostrar_ancho(ancho,alto){
		if(ancho<=1200 && ancho>=800){
			console.log("entre 800 y 1200");
		}else if(ancho<800 && ancho>=600){
			console.log("entre 600 y 800");
			Cargar_imagen("image",'img-800.jpg');
		}else if(ancho<600 && ancho>=480){
			console.log("entre 480 y 600");
			Cargar_imagen("image",'img-480.jpg');
		}else if(ancho<480 && ancho>=320){
			console.log("entre 320  480");
			Cargar_imagen("image",'img-320.jpg');
		}else if(ancho<320){
			console.log("menor a 320");
			Cargar_imagen("image",'img-180.jpg');
		}else{
			console.log("mayor a 1200");
			Cargar_imagen("image",'img-1600.jpg');
		}
	}
	window.addEventListener('resize',medir_ancho,false);
	
	var condicion=new Boolean(true);
	function medir_ancho(evento){
		//console.log("OPEN LISTEN of event: "+evento.type+"; on node: "+this.tagName);
		var alto_browser=window.innerHeight;
		var ancho_browser=window.innerWidth;
		ancho_inicial=ancho_browser;
		if(condicion){
			Mostrar_ancho(ancho_browser,alto_browser);
		}else{
			console.log("solo redimensionaste el ALTO");
		}
		window.removeEventListener('resize',arguments.callee,false);
		//console.log("CLOSED LISTEN");
		setTimeout(function(){
			var ancho_final=window.innerWidth;
			(ancho_inicial!=ancho_final)?condicion=true:condicion=false;
			//console.log("el ancho final:"+ancho_final);
			window.addEventListener('resize',medir_ancho,false);
		},500);

	}

//console.timeEnd("controller1");
