
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
$grade = 16;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

<?php
$age = 32 ;

if ($age >= 18) {
    $adult = true ; 
}
else {
    $adult = false ;    
}
?>
<br><br>

<!-- les tableaux -->

<?php

$user1 = ['Mériadec Dap', 'email', 'secret', 34];
    
echo $user1[0];
echo $user1[1];
echo $user1[3];

?>

<!-- les boucles -->
<?php

$line = 1;

while ($line <= 10){
    echo 'je ne dois pas discuter en classe.<br />'; 
    $line = $line + 1;
}

?>

<?php
$line = 1;

while ($line <= 10){
    echo 'Ceci est la ligne n°'. $line . '<br />'; 
    $line = $line + 1;
}



?>
?>

</body>
</html>