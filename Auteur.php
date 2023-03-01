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

    // ! JE VAIS CREER UNE METHODE POUR RECUPERER LES SUJETS VERROUILES OU OUVERT CREES PAR L'AUTEUR, CA ME PERMETTRA PAR APRÈS DE LIER LES STATUTS À LA COLONNE 'STATUT' DES SUJETS. 
    //! ENSUITE je vais je vais créer une méthode dans la classe Sujet, pour définir le statut l'appeler lors de la création du sujet dans le construct.


    public function getSujetsVerrouilles()
    {
        $sujetsVerrouilles = [];
        foreach ($this->sujets as $sujet) {
            if ($sujet->getverrouille()) {
                $sujetsVerrouilles[] = $sujet;
            }
        }
        return $sujetsVerrouilles;
    }
    
    public function getSujetsOuverts()
    {
        $sujetsOuverts = [];
        foreach ($this->sujets as $sujet) {
            if (!$sujet->getverrouille()) {
                $sujetsOuverts[] = $sujet;
            }
        }
        return $sujetsOuverts;
    }
    
    
    public function tableauSujetsAuteur()
    {
        echo "<br><span style='font-size:22px ; color:black'>  Voici les sujets créés par 
        <b> $this->pseudo </b> </span> <br>";

        echo "<style type=text/css> table tbody tr:nth-child(even) { background-color: #EFEFEF; } </style> 
        <table style='border-collapse :collapse; text-align:center; width:500px'> 
        <thead >
        
            <tr>
                <th> Titres </th>
                <th> Statut </th>
            </tr>
            </thead>
            <tbody>"; // ouverture tbody qui a été ouvert ligne 55 

            echo "<tr> <br>";

         if (0==count($this->sujets))  
        {
            echo "Aucun sujet créé.";
        }
        
        else 
        {
            
           
            foreach ($this->sujets as $sujet) 
 

echo "<tr>".
        "<td style='color:#808080; width: 70% ;text-align:center'>".$sujet -> getTitre ()."</td>"."<td style='display:flex; justify-content:center; '><p style='color:#FFF; font-size:10px; background-color:" . ($sujet->getverrouille() ? "#d43c6c" : "#36bf94") . "; width: 50px;  margin:px; padding:5px'>" . mb_strtoupper($sujet->getverrouille() ? "Clôturé" : "Ouvert") . "</p></td>";
        echo "</tr>";
            
            
            
           
        }
        echo "</tbody></table><b<>"; // fermeture </tbody> et </table>
    }
    

    public function __toString() 
    {
        return $this->pseudo ;
    }
}