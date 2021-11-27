<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'eafloresc9@gmail.com';
  //$receiving_email_address = 'info@santana-hotel.com';

    // the message
    $msg = "Nombre: " . $_POST['name'] . "\n";
    $msg = "Correo: " . $_POST['email'] . "\n";
    $msg += "Mensaje: " . $_POST['message'] . "\n";

    // send email
    @mail($receiving_email_address,"My subject",$msg);

  print "Mensaje enviado correctamente";
?>
