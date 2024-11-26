<?php
$ptr = fopen("resultat.txt","r");
$contenu = fread($ptr, filesize("resultat.txt"));
fclose($ptr);

$contenu = explode(PHP_EOL, $contenu);
unset($contenu[66]);
$contenu = array_values($contenu);

$contenu = implode(PHP_EOL, $contenu);
$ptr = fopen("resultat.txt", "w");
fwrite($ptr, $contenu);


?>