<?php

class Categorie 
{
    private string $libelle;
    private array $sujets;
    private GestionCat $gestionCat;

    public function __construct (string $libelle)
    {
        $this -> libelle = $libelle;
        $this -> sujets = [];


    }

    public function getLibelle()
    {
    return $this -> libelle;
    }

    public function setLibelle($libelle)
    {
        return $this -> libelle = $libelle;
    }

// FONCTIONS

public function addSujet($sujet)
    {
        return $this -> sujets[] = $sujet;
    }

public function nbSujetCategorie()
{
    $nbSujets = count($this -> sujets);
    echo "<br> <br>La catégorie " . $this -> libelle. " :<br> <br> Nombre de sujets : ". $nbSujets ."<br>";
}



// public function afficherListeCategories($categories) {
//     echo "Voici toutes les catégories : <br>";

//     foreach($categories as $categorie) {
//         echo "<li>" . $categorie->getLibelle() . "</li>";
//     }
// }

public function __toString()
{
    return  $this -> libelle ;
}
}