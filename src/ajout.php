<html>
    <link rel="stylesheet" href="add.css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

    require_once('essai.php');

    test();

echo ' 
<div class="container">
<table class="table" border="1">
<thead>
<tr>
<th scope="col">Nom    </th>
<th scope="col">Prenom    </th> 
<th scope="col">Email </th>
<th scope="col">Action </th>
</tr>
</thead>
<tbody>
<tr>
      
<td><button type="submit" action="delete.php">Supprimer</button></td>
</tr>

</tbody>

</table>
</div>
';

 

// if($fp = fopen("resultat.txt","a")){
// fputs($fp, "\n");
// fputs($fp,
// "$nom' ' $prenom ' '$email");
// fclose($fp);

// }
?>
</html>







