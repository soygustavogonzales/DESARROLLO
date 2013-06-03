<?php 
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
/*
$header = 'From: ' . $from . " \r\n";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
*/
$header = "From:" . $email. "\n";
$header .= "Content-type: text/plain; charset=iso-8859-1" ;
/*

*/
$contnt = "Este mensaje fue enviado por: \n";
$contnt .= "Nombre: " . $nombre . " \n";
$contnt .= "Empresa: " . $empresa . " \n";
$contnt .= "E-mail: " . $email . " \n";
$contnt .= "Teléfono: " . $telefono . " \n";
$contnt .= "Mensaje: " . $mensaje . " \n";
$contnt .= "Enviado el " . date('d/m/Y', time());

$para1 = 'g.gonzales@viunex.com';
$para2 = 'gustavo.gonda@gmail.com';
$para3 = 'f.hidalgo@viunex.com';
$para4 = 'fffhidalgo@hotmail.com';
$asunto = 'Contacto desde Viunex.com';

	mail($para1, $asunto, utf8_decode($contnt), $header);
	mail($para2, $asunto, utf8_decode($contnt), $header);
	mail($para3, $asunto, utf8_decode($contnt), $header);
	mail($para4, $asunto, utf8_decode($contnt), $header);
	echo 'Gracias <span style="text-transform:capitalize; color:#96A854;">' .$nombre. '</span>, el formulario fue enviado con éxito.';
?>