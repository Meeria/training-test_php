
<?php 

     $to      = 'meria.dap@hotmail.fr';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: meria.dap@gmail.com' . "\r\n" ;
     
   if(mail($to, $subject, $message, $headers))
    echo 'envoyé !';
  else
    echo 'erreur';
    





