<?php
// var_dump($_POST);
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
if (isset($_POST["sexe"])) 
{
   $sexe = $_POST["sexe"];
}
else 
{ // non coché => rien de posté
    $sexe = "";
}

$naissance = $_POST['naissance'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$question = $_POST['question'];
if(isset($_POST["cgu"]))
{
    $cgu = $_POST['cgu'];
}
else
{// non coché => rien de posté
    $cgu = "";
}
if (empty($nom)) 
{       
    header("Location:Contact.php?erreur=nom&valeur=".$nom);    
} 
else
{
    echo "nom : ".$nom."<br>";
}

if (empty($prenom)) 
{
    header("Location:Contact.php?erreur=prenom&valeur=".$prenom);   
}
else
{
    echo "prenom: ".$prenom."<br>";
}

if (empty($sexe) )
{
    header("Location:Contact.php?erreur=sexe&valeur=".$sexe);   
}
else
{
    echo "sexe: ".$sexe."<br>";
}

if (empty($naissance)) 
{
    header("Location:Contact.php?erreur=naissance&valeur=".$naissance);   
}
else
{
    echo "date de naissance : ".$naissance."<br>";
}

if (empty($ville) )
{
    header("Location:Contact.php?erreur=ville&valeur=".$ville);   
}
else
{
    echo "ville: ".$ville."<br>";
}

if (empty($email)) 
{
    header("Location:Contact.php?erreur=email&valeur=".$email);   
}
else
{
    echo "email: ".$email."<br>";
}

if (empty($question)) 
{
    header("Location:Contact.php?erreur=question&valeur=".$question);  
}
else
{
    echo "question : ".$question."<br>";
}

if (empty($cgu)) 
{
    header("Location:Contact.php?erreur=cgu&valeur=".$cgu);   
}
else
{
    echo "cgu: ".$cgu."<br>";
}

// $nom = $_POST["nom"];
// $prenom = $_POST["prenom"];
// if (isset($_POST["sexe"])) 
// {
//    $sexe = $_POST["sexe"];
// }
// else 
// { // non coché => rien de posté
//     $sexe = "";
// }

// $naissance = $_POST['naissance'];
// $ville = $_POST['ville'];
// $email = $_POST['email'];
// $sujet = $_POST['sujet'];
// $question = $_POST['question'];
// if(isset($_POST["cgu"]))
// {
//     $cgu = $_POST['cgu'];
// }
// else
// {
//     $cgu = "";
// }

// $vide = [];
// $nonVide = [];
// //nom
// if (empty($nom))
// {  
//     array_push($vide,[$nom]);
    
// }
// else
// {
//     array_push($nonVide,[$nom]);
// }
// //prenom
// if (empty($prenom))
// {
//      array_push($vide,[$prenom]);
// }

// else
// {
//     array_push($nonVide,[$prenom]);

// }
// //sexe
// if (empty($sexe))
// {
//     array_push($vide,["$sexe"]);
// }
// else
// {
//     array_push($nonVide,["$sexe"]);
// }
// //naissance
// if (empty($naissance))
// {
//     array_push($vide,[$naissance]);
// }
// else
// {
//     array_push($nonVide,[$naissance]);
// }
// //ville
// if(empty($ville))
// {
//     array_push($vide,[$ville]);
// }
// else
// {
//     array_push($nonVide,[$ville]);
// }
// //email
// if(empty($email))
// {
//     array_push($vide,[$email]);
// }
// else
// {
//     array_push($nonVide,[$email]);
// }
// //sujet
// if ($sujet === "defaut")
// {
    
//     array_push($vide,[$sujet]);
// }
// else
// {
//     array_push($nonVide,[$sujet]);
// }
// //question
// if(empty($question))
// {
//     array_push($vide,[$question]);
// }
// else
// {
//     array_push($nonVide,[$question]);
// }
// //cgu
// if(empty($cgu))
// {
//     array_push($vide,[""]);
// }
// else
// {
//     array_push($nonVide,[$cgu]);
// }

// echo "champs vide :".count($vide);
// echo "champs non vide :".count($nonVide);

// var_dump($nom);
// var_dump($prenom);
// var_dump($sexe);
// var_dump($naissance);
// var_dump($ville);
// var_dump($email);
// var_dump($sujet);
// var_dump($question);
// var_dump($cgu);

// var_dump($_POST);
?>