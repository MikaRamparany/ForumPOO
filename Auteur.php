<?php
class Auteur {
    private string $mail;
    private DateTime $dateInscription;
    private string $pseudo;
    private array $sujets; // Tableau contenant les sujets créés par un auteur;

    public function __construct( $pseudo,$mail,$dateInscription) {
        $this->mail = $mail;
        $this->dateInscription = new DateTime ($dateInscription);
        $this->pseudo = $pseudo;
        $this -> sujets =[];
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
    public function getSujet() 
    {
        return $this->sujets;
    }
    // Ajout de fonctions permettant de récupérer les sujets et les sujets de l'auteur

    public function addSujet(Sujet $sujet ) 
    {
        $this -> sujets[] = $sujet;
    }

    public function infoSujetsAuteur()
    {
        echo "<br><span style='font-size:22px ; color:black'>  Voici les sujets créés par 
        <b> $this->pseudo </b> </span> <br>";

        echo "<style type=text/css> table tbody tr:nth-child(even) { background-color: #EFEFEF; } </style> 
        <table style='border-collapse:collapse; text-align:center; width:500px'>
        <thead >
        
            <tr>
                <th> Titres </th>
            </tr>
            </thead>
            <tbody>";

            echo "<tr> <br>";

         if (0==count($this->sujets))  
        {
            echo "Aucun sujet créé.";
        }
        
        else 
        {
            
            // echo "<ul>";
            foreach ($this->sujets as $sujet) 
            // {
            //     echo  $sujet->getTitre() ;
            // }
            // echo "</ul>";
            {
                echo "<tr>
                <td style='color:#808080'>".$sujet."</td>";
            }
            echo "</ul>";
           echo "</tr>";
           
        }
        echo "</tbody></table><b<>"; // fermeture </tbody> et </table>
    }
    

    public function __toString() 
    {
        return $this->pseudo . ' ' . $this->dateInscription->format('d-m-Y');
    }
}