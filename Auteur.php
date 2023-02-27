<?php
class Auteur {
    private string $mail;
    private DateTime $dateInscription;
    private string $pseudo;

    public function __construct( $pseudo,$mail,$dateInscription) {
        $this->mail = $mail;
        $this->dateInscription = new DateTime ($dateInscription);
        $this->pseudo = $pseudo;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function getDateInscription() {
        return $this->dateInscription;
    }

    public function setDateInscription($dateInscription) {
        $this->dateInscription = $dateInscription;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function __toString() 
    {
        return $this->pseudo . ' ' . $this->dateInscription->format('d-m-Y');
    }
}