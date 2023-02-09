<?php
//---------------------------------------------------

// function degres($c){
//     $f=(9*$c/5)+32;
//     return $f;
// }

//  echo degres(22);

//---------------------------------------------------



// function jour($sec){
//     $jours = floor($sec/86400);
//     $heures = floor(($sec%86400)/3600);
//     $minutes = floor((($sec%86400)%3600)/60);
//     $secondes = $sec%60;

//     return "<p> ".$jours." jours / ". $heures."heures / " .$minutes."minutes / " .$secondes. "secondes</p>";
// }

// echo jour(283623);


//---------------------------------------------------

// function bissextiles($annee){
//     if ($annee%4==0 && $annee%100!=0 || $annee%400==0){
//         return TRUE;
//     } else {
//         return FALSE;
//     }
// }

// echo bissextiles(2023);


//---------------------------------------------------

// for ($i = 0; $i <= 10; $i++){
//     echo "<table><tr>".$i."</tr>";
// }
// for ($j = 0; $j <= 10; $j++){
//     echo "<td>".$j."</td></table>";
// }




/*
?>
<table border="1">
    <?php
     for ($i = 1; $i <= 10; $i++) {
         echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
             $num = 10 * ($i - 1) + $j;
            echo "<td>$num</td>";
         }
         echo "</tr>";
     }
     ?>
 </table>
*/



echo "<p> salut</p>";

$escalope = [
    'title' => 'Escalope milanaise',
    'recipe' => '',
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
];


function nameUser($recette){
    foreach($recette AS $clefs => $valeur){
        echo "<p>".$recette['author']." est l'auteur de la recette ".$recette['title']."</p>";
    }
}

nameUser($escalope);


echo ("<h2>".date('l jS \of F Y h:i:s A')."</h2>");
?>