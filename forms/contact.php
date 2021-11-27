<?php
$to = "info@santana-hotel.com";
//$to = "eafloresc9@gmail.com";
$subject = "Formulario contacto www.hsantanapeten.com";

$message = "
<html>
<head>
<title>SOPORTE</title>
</head>
<body>
<table>
<tr>
<td>Asunto</td>
<td>".htmlentities(addslashes($_POST['subject']))."</td>
</tr>
<tr>
<td>Nombre</td>
<td>".htmlentities(addslashes($_POST['name']))."</td>
</tr>
<tr>
<td>Correo</td>
<td>".htmlentities(addslashes($_POST['email']))."</td>
</tr>
<tr>
<td>Mensaje</td>
<td>".htmlentities(addslashes($_POST['message']))."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@hsantanapeten.com>' . "\r\n";

@mail($to,$subject,$message,$headers);
