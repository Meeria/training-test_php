
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Test de page PHP </h1>
    <p> Petit paragraphe pour combler cette page blanche car j'ai besoin de remplir l'espace vide. </p>
    <?php echo "Ceci est écrit avec du PHP" ; echo date("d/m/Y h:i:s");?> <br>
    <br>
    <?php 
    $userAge = 17;
    $userMail = "coucou.salut@gmail.com";
    $userName = " Tom Dupont";
    echo $userName;
    echo $userMail;?>
    <br><br>
    <?php
    
    echo "Hello $userName et bienvenue sur le site !";
    echo 'hello'.$userName.' et bienvenue sur le site !'; //ok

    ?> 
    <?php
$isEnabled = true;

if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
else {
    echo "Accès refusé ❌ ";
}
?> <br><br>



<?php




?>

</body>
</html>