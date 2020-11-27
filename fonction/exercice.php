<?php


//premiere version

// function calculator ()
// {
//     $nombre1=4;
//     $nombre2=2;
//     $operateur ="/";
//     switch ($operateur)
//     {
//         case "+":
//             echo $nombre1 + $nombre2;
//         break;
//         case "-":
//             echo $nombre1 - $nombre2;
//         break;
//         case "*":
//             echo $nombre1 * $nombre2;
//         break;
//         case "/";
//             echo $nombre1 / $nombre2;
//         break;
//     }
// }

// echo calculator();

//2 eme version

function calculator ($entier1,$entier2)
{
    

    $addition = $entier1 + $entier2;
    $soustration = $entier1 - $entier2;
    $multiplication = $entier1 * $entier2;
    $division = $entier1 / $entier2;
    $retour = array ($addition,$soustration,$multiplication,$division);
    return $retour;
}
foreach (calculator (20,10)as $resultat)
{
    echo $resultat."<br>";
}

function calculPrix($prix_ht, $remise) 
{              
    $base_ht = $prix_ht - $remise;
    $prix_ttc = $base_ht * 1.20; 
    $retour = array($base_ht, $prix_ttc);

    return $retour; 
}   

$retour =  calculPrix(110, 10);

echo"- Base HT : ".$retour["base_ht"]." €<br>"; // affiche 100 €
echo"- Prix TTC : ".$retour["prix_ttc"]." €<br>"; // affiche 120 € 

