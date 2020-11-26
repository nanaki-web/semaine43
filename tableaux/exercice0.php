<?php
echo"Déclaration implicite d'un tableau par attibution d'élément(s) :(Remarquez que l'index n'est pas spécifié, le premier élément ajouté prendra bien sûr l'index 0.)";
$tab[] = "Pomme"; 
$tab[] = "Poire"; 
$tab[] = "Banane";

var_dump($tab);

echo "On peut faire une déclaration implicite en spécifiant l'index :";

$tab[0] = "Pomme"; 
$tab[1] = "Poire"; 
$tab[2] = "Banane";

var_dump($tab);

echo "exemple 1:Un tableau à plusieurs dimensions est un tableau dont les éléments sont eux-mêmes des tableaux (sous-tableaux).";
$tab = array(array(1, "janvier", "2016"), 
             array(2, "février", "2017"), 
             array(3, "mars", "2018"), 
             array(4, "avril", "2019")
             );

var_dump($tab);  

echo "Même tableau que l'exemple 1 mais déclaré différemment :";
$tab[] = array(1, "janvier", "2016"); 
$tab[] = array(2, "février", "2017"); 
$tab[] = array(3, "mars", "2018"); 
$tab[] = array(4, "avril", "2019");

var_dump($tab); 

echo "Le tableau associatif permet d'associer une valeur à une autre, les index sont des chaînes au lieu d'être numériques.

Imaginons que vous vouliez représenter des factures de téléphone mensuelles sur une année. Avec un tableau classique, vous allez associer chaque ligne du tableau aux mois et la colonne aux valeurs :";

$facture[0] = 500; // représente Janvier / 500 euros
$facture[1] = 620; // représente Février 
// $... 
$facture[11]= 300; // représente Décembre

var_dump ($facture);

echo "Grâce aux tableaux associatifs vous allez représenter le même tableau comme suit :";

    $facture["Janvier"] = 500; 

$facture["Janvier"] = 500; 
$facture["Février"] = 620; 
// $........ 
$facture["Décembre"] = 300;

var_dump ($facture);

echo "Vous pouvez aussi l'écrire en utilisant l'opérateur d'association =>.";

$facture = array("Janvier" => 500, "Février" => 620,"Décembre" => 300); 

var_dump ($facture);

echo "Manipulation de tableaux:Taille d'un tableau";
$mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
var_dump ($mois);
echo "La fonction count() retourne le nombre d'éléments (valeurs) que contient un tableau :"."<br>";
echo count($mois)."<br>"; // Affiche 12 
echo "La fonction sizeof() fait strictement la même chose; il s'agit d'un alias de count()."."<br>";
echo sizeof($mois)."<br>"; // Affiche 12 

echo "Lecture d'un tableau"."<br>";
echo "Un tableau peut être parcouru avec les différentes instructions de boucles : for, while et do...while.

Il peut aussi être lu avec l'instruction foreach qui permet d'extraire une valeur ou couple (clé, valeur) à chaque tour de boucle."."<br>";

$factures = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350); 

$total_annuel = 0;

echo "avec var_dump";
var_dump($facture);

echo "Il peut aussi être lu avec l'instruction foreach qui permet d'extraire une valeur ou couple (clé, valeur) à chaque tour de boucle."."<br>";
$factures = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350); 

$total_annuel = 0;
foreach ($factures as $value) 
{ 
   echo $value." &euro;<br>"; 
   $total_annuel += $value;     
} 

echo "Total annuel de vos factures téléphoniques : ".$total_annuel." &euro;"; 
echo "L'instruction foreach permet aussi d'extraire le couple clé/valeur. Dans l'exemple précédent, on affiche le montant des factures mensuelles mais ion ne sait pas à quel mois elles correspondent : il faudrait donc aussi afficher la clé. On peut le faire aisèment en ajoutant avant la variable $value une seconde variable (ici $key) suivie du signe =>; cette nouvelle variable recevra le nom de la clé (dans notre cas, les mois) :";
$factures = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350);
foreach ($factures as $key => $value) 
{ 
    echo "Facture du mois de ".$key." : ".$value." €"."<br>";
     $total_annuel += $value;
}


echo "La fonction array_push()
Cette instruction permet d'ajouter un élément à la fin d'un tableau.";
$tab = array("Lundi", "Mardi", "Mercredi", "Jeudi"); 
array_push($tab, "Vendredi"); 
var_dump ($tab);

echo "La fonction array_pop()
Extrait le dernier élément d'un tableau et le supprimé du tableau :";
$tab = array("Lundi", "Mardi", "Mercredi"); 
$jour = array_pop($tab);


var_dump ($tab);
var_dump ($jour);

echo "La fonction array_unshift()
Ajoute un ou plusieurs éléments en début de tableau :";

$tab = array("Jeudi", "Vendredi"); 
array_unshift($tab, "Lundi", "Mardi", "Mercredi"); 

var_dump($tab);

echo "La fonction array_shift()
Dépile un élément (et un seul) en début du tableau";

$tab = array("Jeudi", "Vendredi"); 
$jour = array_shift($tab);

var_dump($tab);
var_dump($jour);

echo "La fonction unset()
Pour retirer un élément d'un tableau, quelque soit sa position, il faut utiliser la fonction unset() :";

$tab = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"); 

// Suppression de l'élément 2 (Mercredi)
unset($tab[2]);

var_dump($tab);

echo "On constate que les index numériques ne se suivent plus, ce qui peut parfois poser problème dans certains cas (par exemple exécution d'une boucle for qui parcourt le tableau de 1 en 1). Pour y remédier, il faut procéder à la réindexation du tableau avec la fonction array_values() :";

$tab = array_values($tab);
var_dump($tab);

echo "Tris de tableaux";
echo "La fonction sort()
Cette fonction vous permet de trier dans l'ordre alphabétique les données de type chaîne d'un tableau, ou par ordre croissant pour les données numériques.";

$prenoms = array("Franck", "Laurent", "Caroline", "Magali", "Véronique");   

sort($prenoms);

for ($i = 0; $i <= count($prenoms)-1; $i++) 
{
   echo $prenoms[$i]."<br>";
}

var_dump($prenoms);

echo "La fonction rsort();
Tri décroissant d'un tableau";

$prenoms = array("Franck", "Laurent", "Caroline", "Magali", "Véronique");   

rsort($prenoms);

for ($i = 0; $i <= count($prenoms)-1; $i++) 
{
   echo ".$prenoms[$i]"."<br>";
}

var_dump($prenoms);

echo "La fonction asort()
Tri décroissant sur un tableau associatif, l'indexation des clefs est conservée. Le tri se fait sur les valeurs, pas sur les clés :";

$tab = array("a" => "Lundi",
             "b" => "Mardi",
             "c" => "Mercredi",
             "d" => "Jeudi",
             "e" => "Vendredi"
        ); 

asort($tab);  

foreach ($tab as $cle => $valeur) 
{ 
   echo $cle ." : ".$valeur."<br>"; 
}

var_dump($tab);

echo "La fonction arsort()
Tri décroissant sur un tableau associatif, l'indexation des clefs est conservée. Le tri se fait sur les valeurs, pas sur les clés :";

$tab = array("a" => "Lundi",
             "b" => "Mardi",
             "c" => "Mercredi",
             "d" => "Jeudi");

arsort($tab);  

foreach ($tab as $key => $item) 
{ 
    echo $key ." : ".$item."<br>"; 
} 
var_dump($tab);

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
     );


var_dump($a);
var_dump($a[19001]);
