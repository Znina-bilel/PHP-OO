<?php
class Personne {
    private $id;
    private $nom;

    function __construct(int $id, string $nom)
    {
        $this->nom = $nom;
        $this->id =$id;
    }
    function ajoutPersonne(){

    }
public function getNom()
{
   return $this->nom;
}
public function getId()
{
    return $this->id;
}



}

class GestionPersonnes {
    private $listePersonnes = [];
public function ajouterPersonne(Personne $personne)
{
    $this->listePersonnes[] = $personne;
} 
public function afficherPersonne(){
    foreach($this->listePersonnes as $personne){
       {
       echo "ID:" .$personne->getId() . " - Nom: " . $personne->getNom() . "\n";    
        }
    }
}
}
function test(){
    $gestion = new GestionPersonnes();

    $p1 = new Personne(1, "bilel");
    $p2 = new Personne(2, "ahmed");
$gestion->ajouterPersonne($p1);
$gestion->ajouterPersonne($p2);

echo"Liste des personnes";
$gestion->afficherPersonne();
}


test();




