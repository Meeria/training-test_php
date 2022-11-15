<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>

<?php


ini_set('SMTP','smtp.sfr.fr');
$sendmail_from = "dupertsimon@gmail.com";

$retour = mail('meria.dap@hotmail.fr', 'sujet', 'hello world', 'From:dupertsimon@gmail.com');

if ($retour){
    echo "mail bien envoyé";
}


?>
</body>
</html>




