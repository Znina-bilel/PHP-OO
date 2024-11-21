<html>
    <body>
<?php



 
$fichier = 'resultat.txt';

$contenu = file_get_contents($fichier);

echo $contenu;

?>

    </body>
</html>