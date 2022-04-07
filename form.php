<?php

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];

$para = 'camilo.rios234@gmail.com';
$asunto = 'Este mail fue enviado desde la Web';

mail($para, $asunto, utf8_decode($mensaje));
header('location:exito.html');



?>