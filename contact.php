<?php
foreach($_POST as $key=>$value) $$key = $value;
$empresa='SICWS';
$empresaMail='contacto@sicws.com.mx';

$asunto = 'Mensaje enviado de '.$empresa;
$message = 'Nombre: '.$nombre.'<br>correo electronico: '.$email.'<br><br>'.$coment.'<br>Categoria: '.$categoria.;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";

if(mail($empresaMail, $asunto, $message, $headers)){
	$data['result'] = true;
}else{
	$data['result'] = false;
}

//Se regresan datos por json
echo json_encode($data);
?>
