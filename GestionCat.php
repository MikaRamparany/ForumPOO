t<?php 

class GestionCat
{
    private array $categories;
    

    public function __construct( Categorie ...$categories)
    {
        
        $this ->categories = $categories;
        

    }

    public function addCategorie(Categorie $categorie) // permet d'ajouter une catégorie à ce tableau
    {
        return $this->categories[] = $categorie;
    }

    public function afficherListeCategories() // permet d'afficher la liste de toutes les catégories en utilisant une boucle foreach pour parcourir le tableau $categories.
    { 
         echo" Voici toutes les catégories ";
         
        foreach ($this->categories as $categorie) {
            echo "<div class='menu-deroulant'>"
             ."<li>" . $categorie->getLibelle() . "</li>" ."</div>";
        }
    }
}