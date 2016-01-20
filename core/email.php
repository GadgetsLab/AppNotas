<?php 
require('phpmailer/PHPMailerAutoload.php');
$request = (object)$_POST;
$nombre = $request->nombre; 
$correo = $request->correo;
$asunto = $request->asunto;
$mensaje = $request->mensaje;

$mail = new PHPMailer;
$mail->setFrom($correo, $nombre); //quien lo envia. Remitente
$mail->addAddress('reickchozo@gmail.com'); //A quien llega. El receptor
$mail->addAddress('juuanDuuke@gmail.com');
$mail->Subject = $asunto; //Aqui va el asunto del mensaje
$mail->isHtml(true);
$body = "<h3>Nuevo correo de AppNotas</h3>
		<p><b>Nombre: </b>$nombre</p>
		<p><b>Correo: </b>$correo</p>
		<p><b>Asunto: </b>$asunto</p> 
		<p><b>Mensaje: </b>$mensaje</p>
		<p><b>Fecha: </b>".date('Y-m-d')."</p>";
$mail->Body	= $body;

if(!$mail->send())
{
	echo "Algo salio mal. Intentalo luego";
}else{
	echo "Gracias por su opinion";
}


 