<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
     );




//premiere version
echo "première version";
$i = -1;
while ($a[19002][++$i] != "Validation"); 
$i++; // Le tab commence a 0 les semaines a 1
echo "Groupe 19002 : <br> Validation la semaine $i."."<br>";


//deuxieme version
echo "deuxième version"."<br>";
foreach($a as $cle => $valeur)
    {
        if ($cle=="19002")
        {
            echo $b = array_search("validation",$valeur)+1;
        }
        
    }








