<?php 
		
		error_reporting(E_ALL ^ E_NOTICE);//para que los avisos y los reportes warning no aparezcan en la pagina

	/*Con el siguiente bucle recorremos las propiedades del array $_FILES[]
		*"name":atributo name del input de tipo file.
		$_FILES["attr_name"]["name"]:nombre del archivo + extension
		$_FILES["attr_name"]["type"]:type de archivo
		$_FILES["attr_name"]["tmp_name"]:ruta temporal donde se guarda por default
		$_FILES["attr_name"]["error"]:numero de errores que ocurrieron en el proceso
		$_FILES["attr_name"]["size"]:tamaño en bytes del archivo q se procesa
	*/
	foreach($_FILES["file_fls"] as $key => $value){
			echo "<br/>Propiedad: $key : $value";
	};
	$archivo=$_FILES["file_fls"]["tmp_name"];
	$destino="ARCHIVOS SUBIDOS/".$_FILES["file_fls"]["name"];

	if($_FILES["file_fls"]["name"] != "" && $_FILES["file_fls"]["type"]=="image/jpeg"){
		if(move_uploaded_file($archivo,$destino)){
			echo "<br/> YEAA!! ARCHIVO SUBIDO !!! ";
			echo "<br/> Se ha guardado en : ".$destino;
		}else{ echo "<br/> UPPS!! Error al subir archivo"; }
	}else{
		echo "<br/>UPPS!! solo archivos jpeg, elija un file valido";
	}
?>