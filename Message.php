<?php 

class Message
{
    private string $contenu;
    private DateTime $datePubliMessage;
    private Auteur $auteur;
    private Sujet $sujet;

    public function __construct( $contenu, $datePubliMessage, $auteur, sujet $sujet ) 
    {
        $this -> contenu = $contenu;
        $this -> datePubliMessage = new DateTime ($datePubliMessage);
        $this -> auteur = $auteur;
        $this -> sujet = $sujet;
    }

    // Getters and setters

    public function getContenu()
    {
        return $this -> contenu;
    }
    public function setContenu( $contenu )
    {
        $this -> contenu = $contenu;
    }

    public function getdatePubliMessage()
    {
        return $this -> datePubliMessage;
    }
    public function setdatePubliMessage( $datePubliMessage )
    {
        $this -> datePubliMessage = $datePubliMessage;
    }
    public function getauteur()
    {
        return $this -> auteur;
    }
    public function setauteur( $auteur )
    {
        $this -> auteur = $auteur;
    }

    public function getsujet()
    {
        return $this -> sujet;
    }
    public function setsujet( $sujet )
    {
        $this -> sujet = $sujet;
    }

    public function __toString()
    {
        return $this -> contenu .$this -> datePubliMessage;
    }












}