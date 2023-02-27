<?php

class sujet
{

    private string $titre;
    private DateTime $datePubliSujet;
    private bool $verrouille;// true = verrouillé 
    private Auteur $auteur; // un sujet n'a qu'un auteur 
    private Categorie $categorie; // un sujet n'a qu'un categorie 
    private array $messages;

public function __construct ( $categorie,$titre, $datePubliSujet, $auteur, $verrouille) 

    {
    $this -> titre = $titre;
    $this -> datePubliSujet = new DateTime ($datePubliSujet);
    $this -> verrouille = true;
    $this -> auteur = $auteur;
    $this -> categorie = $categorie;
    $this -> categorie ->addSujet($this);
    $this-> messages = [];
    }
// getters and setters
    public function getTitre() : string {
        return $this->titre;
    }

    public function setTitre(string $titre) {
        $this->titre = $titre;
    }

    public function getdatePubliSujet() 
    {
        return $this->datePubliSujet;
    }

    public function setdatePubliSujet(DateTime $datePubliSujet) 
    {
        $this->datePubliSujet = $datePubliSujet;
    }
    public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function getMessages() {
        return $this->messages;
    }

    public function verrouille(bool $verrouille=true) 
    
    {
        return $this -> verrouille = $verrouille;
    }
    //Fonctions 

    public function addMessage( string $message ) 
    {
        return $this-> messages[] = $message;
    }

    public function infoNombremessage()
    {
        return count($this-> messages);
    }

    public function showSujet()

    {
        echo $this -> titre;
    }

public function __toString()
{
    return $this -> titre . " ". $this -> datePubliSujet->format('d/m/Y');
}


}