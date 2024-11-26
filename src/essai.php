<?php

class Personne {
    private $id;
    private $nom;

    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
}

class GestionPersonnes {
    private $listePersonnes = [];

    public function ajouterPersonne(Personne $personne) {
        $this->listePersonnes[] = $personne;
    }

    public function afficherPersonnes() {
        foreach ($this->listePersonnes as $personne) {
            echo "ID: " . $personne->getId() . " - Nom: " . $personne->getNom() . "<br>";
        }
    }

    public function rechercherPersonneParId($id) {
        foreach ($this->listePersonnes as $personne) {
            if ($personne->getId() == $id) {
                return "Personne trouvée: ID=" . $personne->getId() . ", Nom=" . $personne->getNom();
            }
        }
        return "Personne avec ID=$id non trouvée.";
    }

    public function supprimerPersonneParId($id) {
        foreach ($this->listePersonnes as $key => $personne) {
            if ($personne->getId() == $id) {
                unset($this->listePersonnes[$key]);
                echo "Personne avec ID=$id supprimée.<br>";
                return;
            }
        }
        echo "Personne avec ID=$id non trouvée.<br>";
    }

    public function ecrireDansUnFichier() {
        // Ici écrire la liste des personnes dans un fichier txt
    }

    public function recupererListePersonneDuFichier() {
        // Lire le fichiers et remplir le tableau listePersonnes.
    }
}

// Test des fonctionnalités
function test() {
    $gestion = new GestionPersonnes();

    // Ajout de personnes
    $p1 = new Personne(1, "Bilel");
    $p2 = new Personne(2, "Amina");
    $p3 = new Personne(3, "Khaled");

    $gestion->ajouterPersonne($p1);
    $gestion->ajouterPersonne($p2);
    $gestion->ajouterPersonne($p3);

    // Affichage des personnes
    echo "Liste des personnes:<br>";
    $gestion->afficherPersonnes();

    // Recherche d'une personne
    echo $gestion->rechercherPersonneParId(2) . "<br>";
    echo $gestion->rechercherPersonneParId(5) . "<br>";

    // Suppression d'une personne
    $gestion->supprimerPersonneParId(2);

    // Affichage après suppression
    echo "Liste après suppression:<br>";
    $gestion->afficherPersonnes();
}

// test();
?>
