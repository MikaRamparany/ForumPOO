<?php

class Sujet
{

    private string $titre;
    private DateTime $datePubliSujet;
    private bool $verrouille; // true = verrouillé 
    private Auteur $auteur; // un sujet n'a qu'un auteur 
    private Categorie $categorie; // un sujet n'a qu'un categorie 
    private array $messages;
    private array $sujets;

    public function __construct($categorie, $titre, $datePubliSujet, Auteur $auteur, $verrouille)

    {
        $this->titre = $titre;
        $this->datePubliSujet = new DateTime($datePubliSujet);
        $this->verrouille = $verrouille;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->categorie->addSujet($this);
        $this->messages = [];
        $this->auteur->addSujet($this);
        $this->sujets = [];
    }
    // getters and setters
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
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
    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function getverrouille()
    {
        return $this->verrouille;
    }

    public function setverrouille(bool $verrouille)
    {
        return $this->verrouille = $verrouille;
    }

    public function getMessages()
    {
        return $this->messages;
    }






    public function verrouille(bool $verrouille)

    {
        return $this->verrouille = $verrouille;
    }
    //Fonctions 

    public function addMessage(Message $message)
    {
        return $this->messages[] = $message;
    }


    public function afficherMessages()
    {
        echo "<br><span <div class='Titre'; >$this</span> 
        
        
         <p class ='Topic';> Topic créé le " . $this->datePubliSujet->format("d/m/Y") . " par " . $this->auteur->getPseudo()
            . "</p> 
        
        Total messages : " . count($this->messages) . "<br> <br> ";


        $messages = $this->getMessages();
        if ($messages) {
            foreach ($messages as $message) {
                echo "<div class='message'>"

                    . " <p class= 'Button'>" . "<button>Répondre</button> </p>"

                    . "<p class='contenu'>"
                    . $message->getContenu() . "</p>"
                    . "<p class='info'>"
                    . "<hr>" //ajouter la balise hr pour trait séparateur
                    . "Publié par <span class='auteur'>" . $message->getAuteur()->getPseudo()

                    . "</span> le <span class='date'>" . $message->getdatePubliMessage()->format('d/m/Y H:i:s')
                    . "</span></p>";
                echo "</div>";
            }
        } else {
            echo "Aucun message pour ce sujet.";
        }
        echo '<hr style="border-color: #1c58b1; border-width: 2px;">';
    }


    public function verrouillerSujet(bool $verrouille, Auteur $auteur)
    {
        if ($auteur === $this->auteur) {
            $this->verrouille = $verrouille;
            echo "Le sujet " . $this->getTitre() . " a été " . ($verrouille ? "clôturé" : "ré-ouvert") . ".";
        } else {
            echo "Vous n'êtes pas autorisé à clôturer ce sujet.";
        }
    }


    public function __toString()
    {
        return $this->titre;
    }
}
