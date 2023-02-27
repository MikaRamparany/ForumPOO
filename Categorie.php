<?php

class Categorie 
{
    private string $libelle;
    private array $sujets;

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
    return count($this -> sujets);
}

public function __toString()
{
    return $this -> libelle;
}
}