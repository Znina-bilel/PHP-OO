<?php
 echo 'nom: ' .$_POST["nom"].'<br>';
 echo 'prenom: ' .$_POST["prenom"].'<br>';
 echo 'email: ' .$_POST["email"].'<br>';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

 if($fp = fopen("resultat.txt","a")){
fputs($fp, "\n");
fputs($fp,
"$nom#$prenom#$email");
fclose($fp);

}







?>