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
public function setId($id)
{
     $this->id = $id;
}
public function setNom($nom)
{
     $this->nom = $nom;
}
}

$p=new Personne(1,"bilel");
echo($p->getId()."  ".$p->getNom());






