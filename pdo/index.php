<?php
include("functions.php");
$sMessage = "Hello world !";
include("entete.php");
?>

<body> 
<?php 
writeMessage($sMessage); 
?>
<br>
<?php 
writeMessage("Bonjour tout le monde !"); 
?> 
<?php
require_once("pieddepage.php");
?>
