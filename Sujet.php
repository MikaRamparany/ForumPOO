<?php

class Sujet
{

    private string $titre;
    private DateTime $datePubliSujet;
    private bool $verrouille;// true = verrouillé 
    private Auteur $auteur; // un sujet n'a qu'un auteur 
    private Categorie $categorie; // un sujet n'a qu'un categorie 
    private array $messages;

public function __construct ( $categorie,$titre, $datePubliSujet, Auteur $auteur, $verrouille) 

    {
    $this -> titre = $titre;
    $this -> datePubliSujet = new DateTime ($datePubliSujet);
    $this -> verrouille = $verrouille;
    $this -> auteur = $auteur;
    $this -> categorie = $categorie;
    $this -> categorie ->addSujet($this);
    $this-> messages = [];
    $this-> auteur-> addSujet($this);
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

    public function getverrouille() {
        return $this->verrouille;
    }

    public function setverrouille(bool $verrouille) {
        return $this->verrouille = $verrouille;
    }

    public function getMessages() {
        return $this->messages;
    }
    public function statutSujet()

    {  
        if ($this -> verrouille == true)
        {
            return 'Clôturé';
            
        
        }
        else {
            return 'Ouvert';
     
        }
    }
    public function verrouille(bool $verrouille) 
    
    {
        return $this -> verrouille = $verrouille;
    }
    //Fonctions 

    public function addMessage( Message $message ) 
    {
        return $this-> messages[] = $message;
    }


    public function afficherMessages() {
        echo "<link rel='stylesheet' href='style.css' />"; //! pour lier la fonction à ma feuille css
        echo "<br><span <div class='Titre'; >$this</span> 
        
        
         <p class ='Topic';> Topic créé le " . $this -> datePubliSujet->format("d/m/Y") . " par " .$this-> auteur -> getPseudo()
        ."</p> 
        
        Total messages : ". count($this-> messages)."<br> <br> ";


        $messages = $this->getMessages();
        if ($messages) {
            foreach ($messages as $message) {
                echo "<div class='message'>"
                ." <p class= 'Button'>" ."<button>Répondre</button> </p>"
                . "<p class='contenu'>" 
                . $message->getContenu() . "</p>"
                . "<p class='info'>" 
                . "Publié par <span class='auteur'>" . $message->getAuteur()->getPseudo() 
                . "</span> le <span class='date'>" . $message->getdatePubliMessage()->format('d/m/Y H:i:s') 
                . "</span></p>";
                echo "</div>";
            }
        } else {
            echo "Aucun message pour ce sujet.";
        }
    }
    
    public function showInfoSujet() // on va afficher le titre du sujet, la date de création, l'auteur ainsi que les messages qui y sont liés.

    {   echo " <br> Sujet : " ;
        echo " " 
        

        ." ' ".$this -> titre ." ' ".$this  -> statutSujet() 
        
        . " : ". "créé le " . $this -> datePubliSujet->format("d/m/Y") . " par " .$this-> auteur -> getPseudo()
        ."<br> Total messages : ". count($this-> messages)."<br>";
    }

public function __toString()
{
    return $this -> titre;
}


}