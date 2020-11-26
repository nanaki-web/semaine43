<?php
  $a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
  "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
  "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
 );

 $memoire=-1;
foreach($a['19001'] as $value => $value2)
{
  if ($value2 == "Stage")
  {
    $memoire=$value;
  }
}

echo ($memoire);
echo "<br>";

$i = -1;
while ($a[19001][++$i] != "Stage");
while ($a[19001][$i++] == "Stage"); 
$i --;
echo "Groupe 19001 :<br>Stage fini la semaine $i"; 
