<?php

    class GestionCat
    {
        private array $categories;


        public function __construct(Categorie ...$categories)
        {

            $this->categories = $categories;
        }

        public function addCategorie(Categorie $categorie) // permet d'ajouter une catégorie à ce tableau
        {
            return $this->categories[] = $categorie;
        }

        public function afficherListeCategories()
        {
            echo "<div class='menu-titre'>Voici toutes nos catégories</div>"
                . "<ul class='menu-deroulant'>";

            foreach ($this->categories as $categorie) {
                echo "<li>" . $categorie->getLibelle() . "</li>";
            }

            echo "</ul>";
        }
    }
